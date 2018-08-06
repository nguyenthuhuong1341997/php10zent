<?php 
	session_start();
	if ($_SESSION['isLogin']==1) {
		# code...
		echo "Admin ";
		
	} else {
		# code...
		header('Location: login.php');
	}
	
 ?>
 <a href="logout.php">Logout</a>