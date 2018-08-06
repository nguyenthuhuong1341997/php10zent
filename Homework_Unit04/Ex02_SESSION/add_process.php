<?php 
	session_start();
	$infor = array(
		'id' => $_POST['id'], 
		'name' => $_POST['name'], 
		'phone' => $_POST['phone'], 
		'email' => $_POST['email'], 
		'gioitinh' => $_POST['gioitinh'], 
	);
	$_SESSION= array($infor);
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	header("Location: list.php");
 ?>