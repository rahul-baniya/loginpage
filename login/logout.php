<?php 
	setcookie('name',"vb",time()-167);
	setcookie('pass',"vb",time()-167);
	session_start();
	session_destroy();
	echo "All cookie cleared";
 ?>