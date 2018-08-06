<?php 
    include_once 'views/layout/admin/header.php';
 ?>
				
		 <div id="page-wrapper">
		 	<div class="row">
		 		<div class="container">
					<div class="row main" style="width: 80%; padding: 5% 10%">
						<div class="main-login main-center">
							<h1>EDIT POST</h1>
							<form class="" method="POST" action="?mod=admin&act=update_post&id=<?=$admin['id']?>">
								
								<div class="form-group">
									<label for="name" class="cols-sm-2 control-label">Title</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="far fa-newspaper"></i></span>
											<input type="text" class="form-control" name="title" id="name"  value="<?=$admin['title']?>" />
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label">Short Content</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="short_content" id="email"  value="<?=$admin['short_content']?>"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label">Contents</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
											<textarea class="form-control" name="contents"><?=$admin['contents']?></textarea>
											
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="cols-sm-2 control-label">Image</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="far fa-image"></i></span>
											<input type="text" class="form-control" name="image" id="password"  value="<?=$admin['image']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="confirm" class="cols-sm-2 control-label">Date Public</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
											<input type="text" class="form-control" name="date_public" id="confirm"  value="<?=$admin['date_public']?>"/>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label for="confirm" class="cols-sm-2 control-label">Author</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="author" id="confirm"  value="<?=$admin['author']?>"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-offset-2 col-xs-10">
										<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block ">Submit</button>
									</div>
		        				</div>
							</form>
						</div>
					</div>
				</div>
		 	</div>
		 </div>
<?php 
    include_once 'views/layout/admin/footer.php';
 ?>