<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		a:link 
		{
		    color: green;
		    background-color: transparent;
		    text-decoration: none;
		}

		a:visited
		{
		    color: pink;
		    background-color: transparent;
		    text-decoration: none;
		}

		a:hover
		{
		    color: red;
		    background-color: transparent;
		    text-decoration: underline;
		}

		a:active
		{
		    color: yellow;
		    background-color: transparent;
		    text-decoration: underline;
		}
</style> 
</head>
<body>
	<div>
  		<?php if (isset($_SESSION['success'])) : ?>
      		<div class="error success" >
      			<h3>
          			<?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
          		</h3>
          	<?php endif ?>
	</div>

	<div class="header"> Good Day Swapnil </div>
		<div align="center" class="services">
			<div class="services1">
				<h1>Weather</h1>
				<a href="#"><img src="clouds_icon.png"></a> 
				<p>Todays weather is nice</p>
			</div>
		</div>
		<div class="services1">
				<h1>Weather</h1>
				<a href="#"><img src="clouds_icon.png"></a> 
				<p>Todays weather is nice</p>
			</div>
		</div>


</body>
</html> 	