<?php 
	$servername="localhost";
	$username="root";
	$password="123456";
	$dbname="sapa12thang";
	$conn= new mysqli($servername, $username, $password, $dbname);

	$conn-> set_charset("utf8");
	if ($conn->connect_error) {
		# code...
		die("Connection failed: " .$conn->connect_error);
	} 
	
 ?>