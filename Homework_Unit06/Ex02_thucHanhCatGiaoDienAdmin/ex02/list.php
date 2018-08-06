

<?php 

	session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bài 02 - Zent Group</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		include('huong.php');
	 ?>
<div class="container" style="width: 75%;margin-left: 20%" >
	<h2 style="text-align: center">DANH SÁCH NGƯỜI DÙNG</h2>
	<a href="add.php" class="btn btn-primary">Thêm mới</a>
	
	<?php 

		if (isset($_COOKIE['msg'])) {

	 ?>

	<div class="alert alert-success">
		<strong>Thông báo:</strong> <?php echo $_COOKIE['msg']; } ?>
	</div>
	
	<table class="table table-hover" style="width: 75%;margin-left: 20%">
		<thead>
			<tr>
				<th>#</th>
				<th>Mã sinh viên</th>
				<th>Họ tên</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				$count = 0;
				foreach ($_SESSION['info'] as $key => $value) {
					$count++

			 ?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td>
						
						<a href="add.php?id=<?php echo $value['id']; ?>" class="btn btn-info" name="edit">Edit</a>
						<a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

</body>
</html>