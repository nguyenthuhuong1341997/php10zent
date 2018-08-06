<?php 
	include_once('connection.php');
	// else {
	// 	# code...
	// 	echo "Kết nối thành công";
	// }
	// Câu lệnh truy vấn cơ sở dữ liệu
	$query="SELECT * FROM news;";
	//Thực thi câu lệnh truy vấn cơ sở dữ liệu
	$result= $conn->query($query); 			//Tương đương với câu lệnh run trên sql
	// while ($row= $result->fetch_assoc()) {
	// 	# code...
	// 	echo "<pre>";
	// 		print_r($row);
	// 	echo "</pre>";
	// }
	
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<style type="text/css">
		th{
			padding: 5px;
			text-align: center;
		}
		table,h1{
			text-align: center;
		}
		.right{
			text-align: right;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		
		<form class="col-md-10 col-md-offset-1">
			<div class="row" style="border-bottom: 2px solid #969292; ">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr><h1 >DANH SÁCH SẢN PHẨM </h1></tr>
						<tr ><button type="submit" class="btn btn-success" style="margin-left: 100px;margin-bottom:  20px;"><a href="add.php" style="font-size: 14pt;color: black">View cart</a></button></tr>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Short content</th>
							<th>Content</th>
							<th>Image</th>

							<th>Author</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							while ($row=$result->fetch_assoc()) {
						 ?>
							<tr>
								<td><?= $row['id'] ?></td>
								<td><?= $row['title'] ?></td>
								<td><?= $row['short_content'] ?></td>
								<td><?= $row['contents'] ?></td>
								<td><?= $row['image'] ?></td>
								<td><?= $row['author'] ?></td>
								<td>
									<a href="detail.php?id=<?= $row['id']?>" class="btn btn-danger" style="margin-right:  15px;">Detail</a>
									<a href="remove.php?id=<?= $row['id']?>" class="btn btn-warning" style="margin-right:  15px;">Remove</a>
							</tr>
						<?php  } ?>
					</tbody>
				</table>
			</div>
		</form>
	</div>
</body>
</html>