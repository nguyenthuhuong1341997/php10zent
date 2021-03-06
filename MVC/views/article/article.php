<?php 
	include_once 'views/layout/header.php';
	
 ?>
	<div id="page-wrapper" style="padding-top: 5%">
		<div class="row" style="padding-bottom: 5%">
			<a href="?mod=article&act=add" class="btn btn-success" >Thêm mới</a>
		</div>
		<div class="row">
			
			<div>
				<?php 
					if (isset($_COOKIE['msg'])) {
						# code...
					?>
				<div class="alert alert-success">
					<?php echo $_COOKIE['msg']; ?>
				</div>
				<?php
					}
				 ?>
			</div>
	 		<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th style="width:2%">No</th>
							<th style="width:10%">Title</th>
							<th style="width:10%">Short Content</th>
							<th style="width:3%">Author</th>
							<th style="width:3%"></th>
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
							<td><?=$post['short_content']?></td>
							<td><?=$post['author']?></td>
							<td>
								<a href="?mod=article&act=detail&id=<?=$post['id']?>" class="btn btn-success">Detail</a>
								<a href="?mod=article&act=edit&id=<?=$post['id']?>" class="btn btn-success">Edit</a>
								<a href="?mod=article&act=delete&id=<?=$post['id']?>" class="btn btn-danger">Delete</a>
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