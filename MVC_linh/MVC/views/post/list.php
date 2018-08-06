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
			color: #08cfff
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="col-sm-10 col-sm-offset-1">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr><h1>DANH SÁCH TIN TỨC</h1></tr>
					<tr><a href="?mod=post&act=add" class="btn btn-primary" style="margin: 10px;">Creat</a></tr>
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
						<th>Title</th>
						<th>Short contents</th>
						<th>Author</th>
						<th style="width: 250px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=0;
						foreach ($posts as $post) {
							$i++;
						
					?>
					<tr>
						<td><?= $i?></td>
						<td><?= $post['title']?></td>
						<td><?= $post['short_content']?></td>
						<td><?= $post['author']?></td>
						<td>
							<a href="?mod=post&act=edit&id=<?= $post['id']?>" class="btn btn-primary">Edit</a>
							<a href="?mod=post&act=delete&id=<?= $post['id']?>" class="btn btn-success">Delete</a>
							<a href="?mod=post&act=detail&id=<?= $post['id']?>" class="btn btn-danger">Detail</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>