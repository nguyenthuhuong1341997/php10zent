<?php 
	$severname='localhost';
	$username='root';
	$password='123456';
	$dbname='php10.zent';
	$conn= new mysqli($severname,  $username, $password, $dbname);
	$conn->set_charset("utf8");

	if ($conn->connect_error) {
		# code...
		die("Connection_failsed: " .$conn->connect_error);
	}
	
 ?>