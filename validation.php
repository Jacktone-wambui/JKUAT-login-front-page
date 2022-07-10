<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	
	mysqli_select_db($con, 'userregistration');
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$s = "select * from usertable where username = '$name' && password = '$password'";
	
	$result = mysqli_query($con, $s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		  $_SESSION['username'] = $name;
	      header('location:home.php');
	}else{
	    header('location:signup.html');
	}
	?>
</body>
</html>