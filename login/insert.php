
<?php 
	include ('connection.php');


	$name=$_POST['username'];
	$pass=$_POST['password'];
	$sql="INSERT INTO userinfo(Username,Password) VALUES('$name','$pass')";

	$res=mysqli_query($conn,$sql);

	if ($res) {
		echo "success";
	}else{
		echo "error";
	}

 ?>