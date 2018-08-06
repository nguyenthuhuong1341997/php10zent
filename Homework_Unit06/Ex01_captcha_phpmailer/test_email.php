<?php 
	session_start();
	require_once('email/emailfunction.php');
	$contents="PHP10";
	send_email($_SESSION['student'][3],"thao",$contents,'$PHP10' );
 ?>