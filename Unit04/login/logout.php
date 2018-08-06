<?php 
	session_start();

	session_destroy(); 		//xóa hết tất cả sesion trong đó
	header('Location: login.php');
 ?>