<?php 
	include_once 'views/layout/header.php';
	
 ?>
	<div id="page-wrapper" style="padding-top: 5%">
		<div class="row" style="padding-bottom: 2%">
			<a href="?mod=list_user&act=add" class="btn btn-success">Thêm người dùng</a>
		</div>
		<div class="row" style="padding-bottom: 2%">
			<?php if (isset($_COOKIE['msg'])) {
				# code...
			?>
			<div class="alert alert-success">
				<?php echo $_COOKIE['msg']; ?>
			</div>
			<?php } ?>
		</div>
		<div class="row" style="padding-bottom: 2%">
			<?php if (isset($_COOKIE['msg1'])) {
				# code...
			?>
			<div class="alert alert-danger">
				<?php echo $_COOKIE['msg1']; ?>
			</div>
			<?php } ?>
		</div>
		<div class="row">

	 		<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th style="width:2%">No</th>
							
							<th style="width:10%">Name</th>
							<th style="width:3%">Address</th>
							<th style="width:3%"></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($postsUser as $post) {
								# code...
						?>
						<tr>
							<td><?=$post['id']?></td>
							<td><?=$post['name']?></td>
							<td><?=$post['address']?></td>
							
							<td>
								
								<a href="?mod=list_user&act=edit&id=<?=$post['id']?>" class="btn btn-success">Edit</a>
								<a href="?mod=list_user&act=delete&id=<?=$post['id']?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						<?php } ?>	
						
						
					</tbody>
				</table>
	 	</div>
	</div>
 	

 <?php 
 	include_once 'views/layout/footer.php';
  ?>