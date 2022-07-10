<?php
	
	session_start();
    if(!isset($_SESSION['username'])){
		header('location:index.html');
	}
	
	?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<title>Home Page</title>
</head>

<body>
	
	
	<a class="float-right" href="logout.php">LOGOUT</a>
	
	
	
	
	<center>
	<main class="signupbox">
		<img src="logo.png" class="logo">
	
	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
		</center>
		
	</main>
	</p>
	</p>
</body>
</html>