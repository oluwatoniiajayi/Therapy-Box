<?php include('server.php') ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header"> Hackathon </div>
	<form method="post" action="login.php">
	    <div>
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password_1"  placeholder="Password">
        </div>
        <button>Login</button>
	</form>
	<footer>
        New to the hackathon? <a href="register.php" style="color:yellow;">Sign Up</a>
	</footer>
</body>
</html> 	