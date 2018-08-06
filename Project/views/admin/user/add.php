<?php 
    include_once 'views/layout/admin/header.php';
 ?>
				
		 <div id="page-wrapper">
		 	<div class="row">
		 		<div class="container">
					<div class="row main" style="width: 80%; padding: 5% 10%">
						<div class="main-login main-center">
							<h1>ADD USER</h1>
							<form class="" method="POST" action="?mod=admin&act=store">
								
								<div class="form-group">
									<label for="name" class="cols-sm-2 control-label">Name</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label">Email</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
											<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label">Address</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="address" id="email"  placeholder="Enter your Email"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="cols-sm-2 control-label">Password</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
											<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
											<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label">Type</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<select class="form-control" name="type">
												<option>admin</option>
												<option>user</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-offset-2 col-xs-10">
										<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block ">Create</button>
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