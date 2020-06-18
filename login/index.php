<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body style="margin-left: 500px;">
	<?php 
	include ('connection.php');
	 ?>
		<h2>Login Form</h2>
		<img src="0.png" style="width: 70px; height: 70px; margin-left: 60px;">
		<form action="authentication.php" method="post">
		<input type="text" name="username" placeholder="Enter your username" id="user"><br><br>
		<input type="password" name="password" placeholder="Enter your password" id="pass"> <br><br>

		<input type="checkbox" name="remember">Remember Me <br>

		<input type="submit" name="save" style="padding: 4px; width: 122px;">


		<br><br>
		<a href="create.php">Create account</a>

		<form></form>

		<?php 
			session_start();
			if (isset($_SESSION['usern']) and isset($_SESSION['passw'])) {
				
				$user=$_SESSION['usern'];
				$pass=$_SESSION['passw'];

				echo $user.$pass;

				echo "<script> 
						document.getElementById('username').value='$user';
						document.getElementById('password').value='$pass';

				 </script>";

			}
		 ?>

		
</body>
</html>