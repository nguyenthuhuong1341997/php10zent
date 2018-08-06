<?php 
	include_once 'connection.php';
	$id=$_GET['id'];
	$query="SELECT * FROM news WHERE id=".$id;

	// Thực thi câu lệnh truy vấn CSDL
	$posts= $conn->query($query)->fetch_assoc();
	if (isset($_POST['submit'])) {
		# code...
		$title=$_POST['title'];
		$short_content=$_POST['short_content'];
		$contents=$_POST['contents'];
		$image=$_POST['image'];
		$author=$_POST['author'];
		$date_public=date('Y-m-d H:i:s');
		include_once("connection.php");
		$query="UPDATE news SET title='".$title."', short_content='".$short_content."', contents='".$contents."', image='".$image."', author='".$author."'
		WHERE id= " .$id;
		$result= $conn->query($query);

		if ($result==1) {
			header("Location: view.php");
		} else {
			echo "Lỗi: Sửa bài viết mới";
		}
	}



	include_once 'headerAdmin.php';
?>

	<div class="row" style="padding: 2% 2% 2% 6%">
		<form action="" class="form-horizontal" method="POST">
	    	<div class="form-group">
	          	<label class="control-label col-sm-3">Title</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div >
		              	<input type="text" class="form-control" name="title" value="<?=$posts['title']?>" required="">
	            	</div>
	            	
	          	</div>
	        </div>        
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Short content</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div>
		              	<textarea name="short_content" class="form-control" rows="5"><?=$posts['short_content']?></textarea>
	            	</div>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Contents</label>
	          	<div class="col-md-8 col-sm-9">
	          		<div >
	            		<textarea name="contents" class="form-control" rows="5"><?=$posts['contents']?></textarea>
	            	</div>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label class="control-label col-sm-3">Image link</label>
	          	<div class="col-md-8 col-sm-9">
	              	<div >
		              	<input type="text" class="form-control" name="image" value="<?=$posts['image']?>" required="">
	            	</div>
	        	</div>
	        </div>
	        <div class="form-group">
				<label class="control-label col-sm-3">Author</label>
				<div class="col-md-8 col-sm-9">
					<div>
						<input type="text" class="form-control" name="author" value="<?=$posts['author']?>" required="">
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