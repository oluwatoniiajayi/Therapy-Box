<?php include('server.php') ?>
 <!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>HACKATHON</h2>
	</div>
	
	<form method="post" action="login.php">
		<div class="input-text">
			<label>Username</label>
			<input type="text" name="username" placeholder="name">
		</div>
		
		<div class="input-text">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="name">
		</div>
		<div class="input-text">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			New to hackathon? <a href="register.php"> Sign up</a>
		</p>
	</form>
	
</body>
</html> 	