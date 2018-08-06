<?php 
	
	include_once('connection.php');
	$id=$_GET['id'];
	$query="DELETE FROM user WHERE id=".$id;

	// Thực thi câu lệnh truy vấn CSDL
	$posts= $conn->query($query);

	header("Location: view_user.php");
 ?>