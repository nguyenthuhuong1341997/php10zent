<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-sm-9">
			<form action="?mod=post&act=store" method="POST" role="form">
				<legend><h1 align="center">Add posts</h1></legend>
				
				<div class="form-group">
		          	<label class="control-label col-sm-2 ">Title</label>
		          	<div class="col-md-9 col-sm-9" style="padding-bottom: 30px">
		          		<div >
			              	<input type="text" class="form-control" name="title" value="" required="">
		            	</div>
		            	
		          	</div>
		        </div>        
		        <div class="form-group">
		          	<label class="control-label col-sm-2">Short content</label>
		          	<div class="col-md-9 col-sm-9" style="padding-bottom: 30px">
		          		<div>
			              	<textarea name="short_content" class="form-control" rows="5"></textarea>
		            	</div>
		          	</div>
		        </div>
		        <div class="form-group">
		          	<label class="control-label col-sm-2">Contents</label>
		          	<div class="col-md-9 col-sm-9" style="padding-bottom: 30px">
		          		<div >
		            		<textarea name="contents" class="form-control" rows="5"></textarea>
		            	</div>
		          	</div>
		        </div>
		        <div class="form-group">
		          	<label class="control-label col-sm-2">Image link</label>
		          	<div class="col-md-9 col-sm-9" style="padding-bottom: 30px">
		              	<div >
			              	<input type="text" class="form-control" name="image" value="" required="">
		            	</div>
		        	</div>
		        </div>
		        <div class="form-group">
					<label class="control-label col-sm-2">Author</label>
					<div class="col-md-9 col-sm-9" style="padding-bottom: 30px">
						<div>
							<input type="text" class="form-control" name="author" value="" required="">
						</div>
					</div>
		        </div>
				<div class="form-group">
					<div class="col-xs-offset-2 col-xs-10">
						<button type="submit" name="submit" class="btn btn-primary btn-md">Create</button>
					</div>
		        </div>
			</form>
		</div>
	</div>
	
</body>
</html>