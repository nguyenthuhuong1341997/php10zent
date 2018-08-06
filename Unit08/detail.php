<?php 
	$id= $_GET['id'];

	include_once('connection.php');
	
	$query="SELECT * FROM news WHERE id= " .$id;
	//Thực thi câu lệnh truy vấn cơ sở dữ liệu
	$result= $conn->query($query)->fetch_assoc(); 			//Tương đương với câu lệnh run trên sql
	
		echo "<pre>";
			print_r($result);
		echo "</pre>";
	
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<h2><?= $result['title'] ?></h2>
 	<h5><?= $result['short_content'] ?></h5>
 	<img src="<?= $result['image'] ?>" alt="">
 	<p><?= $result['contents'] ?></p>
 	<p style="align= right;"><?= $result['author'] ?></p>
 </body>
 </html>