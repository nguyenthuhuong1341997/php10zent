<?php 
	include_once 'views/header_footer/header.php';
	
 ?>
	<div id="page-wrapper" style="padding-top: 5%">
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
								<a href="" class="btn btn-success">Detail</a>
								
								<a href="" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						<?php } ?>	
						
						
					</tbody>
				</table>
	 	</div>
	</div>
 	

 <?php 
 	include_once 'views/header_footer/footer.php';
  ?>