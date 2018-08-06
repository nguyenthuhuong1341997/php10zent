<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		th,h1,tbody {
			text-align: center;
		}
		h1{
			color: #08cfff;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="col-sm-10 col-sm-offset-1">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr><h1>DANH SÁCH NGƯỜI DÙNG </h1></tr>
					<tr><a href="?mod=user&act=add" class="btn btn-primary" style="margin: 20px">Create</a></tr>
					<tr>
						<?php 
							if (isset($_COOKIE['msg'])) {
						 ?>
						<div class="alert alert-success" role="alert">
  							<?php echo $_COOKIE['msg']; ?>
						</div>
						<?php } ?>
					</tr>
					<tr class="warning">
						<th>No</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th style="width: 250px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=0;
						foreach ($users as $user) {
							$i++;
						
					?>
					<tr>
						<td><?= $i?></td>
						<td><?= $user['name']?></td>
						<td><?= $user['phone']?></td>
						<td><?= $user['email']?></td>
						<td>
							<a href="?mod=user&act=detail&id=<?=$user['id']?>" class="btn btn-danger">Detail</a>
							<a href="?mod=user&act=edit&id=<?=$user['id']?>" class="btn btn-primary">Edit</a>
							<a href="?mod=user&act=delete&id=<?=$user['id']?>" class="btn btn-success">Delete</a>
						</td>
					</tr>
					<?php 
						}
					 ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>