<?php 
	include ('connection.php');

	$name=$_POST['username'];
	$pass=$_POST['password'];

	
	if (isset($_POST['remember'])) {
		session_start();
		$_SESSION['usern']=$name;
		$_SESSION['passw']=$pass;

		echo " Session established";
	}

	



	$us=0;
	$ps=0;
	 $sql="SELECT * FROM userinfo";

	 $res=mysqli_query($conn,$sql);

	 while($ans=mysqli_fetch_assoc($res)){

	 	if ($ans['Username']==$name) {
	 		if ($ans['Password']==$pass) {
			 		$us=1;$ps=1;
			 		
	 		}else{$us=1;
	 				}

	 	}
	 }

	 if($us==1 && $ps==1){
	 	echo "login successful";
	 }else if ($us==1) {
	 	 	echo "Password is incorrect";
	 
	 }else{	echo "Username is incorrect";	}
	 	

	
	if ($res) {
		echo ".";
	}else{
		echo "error";
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<a href="logout.php">Log Out</a>
 </body>
 </html>