<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="hhtp://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<h3>Hiển thị danh sách bài viết</h3>
	<div class="container-fluid">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Title</th>
						<th>Author</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($posts as $post) {
							# code...
					?>
					<tr>
						<td><?=$post['id']?></td>
						<td><?=$post['title']?></td>
						<td><?=$post['author']?></td>
					</tr>
					<?php } ?>	
					
					
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>