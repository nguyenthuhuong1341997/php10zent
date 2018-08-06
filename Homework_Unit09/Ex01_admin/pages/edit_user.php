<?php 
	include_once 'connection.php';
	$id=$_GET['id'];
	$query="SELECT * FROM user WHERE id=".$id;

	// Thực thi câu lệnh truy vấn CSDL
	$posts= $conn->query($query)->fetch_assoc();
	if (isset($_POST['submit'])) {
		# code...
		$name=$_POST['name'];
		$password=md5($_POST['password']);
		$address=$_POST['address'];
		
		include_once("connection.php");
		$query="UPDATE user SET name='".$name."', password='".$password."', address='".$address."'
		WHERE id= " .$id;
		$result= $conn->query($query);

		if ($result==1) {
			header("Location: view_user.php");
		} else {
			echo "Lỗi: Sửa bài viết mới";
		}
	}



	include_once 'headerAdmin.php';
?>

	<div class="row" style="padding: 2% 2% 2% 6%">
		<form action="" class="form-horizontal" method="POST">
			<center><h1 class="text-primary">ADD USER</h1></center>
	    	<div class="form-group">
	          	<label class="control-label col-sm-3">Name</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div >
		              	<input type="text" class="form-control" name="name" value="<?=$posts['name']?>" required="">
	            	</div>
	            	
	          	</div>
	        </div>        
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Password</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div>
		              	<input type="password"  class="form-control" value="<?=$posts['password']?>" name="password">
	            	</div>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Address</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div >
	            		<input type="text" class="form-control" value="<?=$posts['address']?>" name="address">
	            	</div>
	          	</div>
	        </div>
	        
	        <div class="form-group">
				<div class="col-xs-offset-3 col-xs-10">
					<button type="submit" name="submit" class="btn btn-primary btn-md">Edit</button>
				</div>
	        </div>
		</form>
	</div>