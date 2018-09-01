<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>HACKATHON</h2>
	</div>
	
	<form method="post" action="register.php">
		<?php include ('errors.php'); ?>
		<div class="input-text">
			Username    <input type="text" name="username" placeholder="name"value="<?php echo $username; ?>">
		</div>
		<div class="input-text">
			Email    <input type="text" name="email" placeholder="name@example.com"value="<?php echo $email; ?>">
		</div>
		<div class="input-text">
			Password    <input type="password" name="password_1" placeholder="name">
		</div>
		<div class="input-text">
			Confirm Password    <input type="password" name="password_2" placeholder="password">
		</div>
		<div class="input-text">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	
</body>
</html> 	