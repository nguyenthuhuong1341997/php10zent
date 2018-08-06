<?php 
	include_once 'connection.php';
	if (isset($_POST['submit'])) {
		# code...
		$name=$_POST['name'];
		$password=md5($_POST['password']);
		
		$address=$_POST['address'];
		
		include_once("connection.php");
		$query="INSERT INTO user(name,password,address)
				values('".$name."','".$password."','".$address."')";
		$result= $conn->query($query);

		if ($result==1) {
			# code...
			header('Location: view_user.php');
		} else {
			# code...
			echo "Lỗi: " .$conn->query(query) ;
		}
		
	}


	include_once 'headerAdmin.php';
 ?>


 	<div class="row" style="padding: 6% 2% 2% 10%">

		<form action="" class="form-horizontal" method="POST">
			<center><h1 class="text-primary">ADD USER</h1></center>
	    	<div class="form-group">
	          	<label class="control-label col-sm-3">Name</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div >
		              	<input type="text" class="form-control" name="name" value="" required="">
	            	</div>
	            	
	          	</div>
	        </div>        
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Password</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div>
		              	<input type="password"  class="form-control" name="password">
	            	</div>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Address</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div >
	            		<input type="text" class="form-control" name="address">
	            	</div>
	          	</div>
	        </div>
	        
	        <div class="form-group">
				<div class="col-xs-offset-3 col-xs-10">
					<button type="submit" name="submit" class="btn btn-primary btn-md">Add</button>
				</div>
	        </div>
		</form>
 	</div>

<?php 
	include_once 'footer.php';
 ?>