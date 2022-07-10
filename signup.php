<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	header('location:index.html');
	
	$con = mysqli_connect('localhost','root','');
	
	mysqli_select_db($con, 'userregistration');
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$s = "select * from usertable where username = '$name'";
	
	$result = mysqli_query($con, $s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
	echo" Username Already Taken";
	}else{
	    $reg= "insert into usertable(username,email,password) values('$name','$email','$password')";
	    mysqli_query($con, $reg);
	    echo" Registration Successful";
	}
	?>
</body>
</html>