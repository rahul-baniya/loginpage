<!DOCTYPE html>
<html>
<head>
	<title>Create an account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	include ('connection.php');
	 ?>
	
	<h4>Enter new username and password</h4>
	<form action="insert.php" method="post">
		<input type="text" name="username" placeholder="Enter new username"><br><br>
		<input type="password" name="password" placeholder="Enter new password"> <br><br>
		<input type="submit" name="save">
	</form>



	
</body>
</html>