<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header"> Good Day Swapnil </div>
		<div class="grid">
		<div style="color:black;">
			Weather
		</div>
		<div>
			<a href="news.php">News</a>
		</div>
		<div>
			<a href="sports.php">Sports</a>
		</div>
		<div>
			<a href="photos.php">Photos</a>
		</div>
		<div>
			<a href="tasks.php">Tasks</a>
				<form action="tasks.php">
					<input type="checkbox">
					<br>
					<input type="checkbox"> 
					<br>
					<input type="checkbox"> 
					<br>
				</form> 
		</div>
		<div style="color: black;">
			Clothes
		</div>
   </div>
</body>
</html> 	