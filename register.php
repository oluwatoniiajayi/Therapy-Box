<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header"> Hackathon </div>
	
	<form method="post" action="register.php">
		<?php include ('errors.php'); ?>
		<div>
			<div class="input-text col-4" >
				<input type="text" name="username" placeholder="Username"value="<?php echo $username; ?>">
			</div>
			<div class="input-text col-4 right">
				<input type="text" name="email" placeholder="name@example.com"value="<?php echo $email; ?>">
			</div>
			<div class="input-text col-4">
				<input type="password" name="password_1" placeholder="Password">
			</div>
			<div class="input-text col-4 right">
				<input type="password" name="password_2" placeholder="Confirm password">
			</div>
		</div>
			<div class="images">
				<input type="file" value="Add Picture" class='image' height="100px" width="200px">
			</div>
			<button name="register" type="submit">Register</button>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	
</body>
</html> 	