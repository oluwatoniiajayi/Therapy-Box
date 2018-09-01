<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title> User Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration</h2>
	</div>
	
	<form method="post" action="register.php">
		<div class="input-text">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-text">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-text">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-text">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-text">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
	</form>
	
</body>
</html> 	