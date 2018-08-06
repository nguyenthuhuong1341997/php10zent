<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
		    background: #fff;
			font-family: 'Roboto', sans-serif;
			color:#333;
			line-height: 25px;	
		}
		h1, h2, h3, h4, h5, h6 {
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
			color:#111;
			margin-top:5px;
			margin-bottom:5px;
		}
		h1, h2, h3 {
			text-transform:uppercase;
		}
		small, .small {
		    font-size: 91%;
		}
		input.upload {
		    position: absolute;
		    top: 0;
		    right: 0;
		    margin: 0;
		    padding: 0;
		    font-size: 12pt;
		    cursor: pointer;
		    opacity: 1;
		    filter: alpha(opacity=1);    
		}

		.form-inline .form-group{
		    margin-left: 0;
		    margin-right: 0;
		}
		.control-label {
		    color:#333333;
		    font-size: 15pt;
		}
		.info ul li{
		    font-size: 13pt;
		 }
		.info span{
		font-weight: bold;
		font-size: 15pt;
		}	
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
		    <div class="col-md-10">
		      <section>      
		        <h1 class="entry-title" style="text-align: center;"><span>THÊM NGƯỜI DÙNG</span> </h1>
		        <hr>
	            <form action="?mod=list_user&act=store" class="form-horizontal" method="POST">
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
				              	<input type="password" lass="form-control" name="password" value="" required="" >
			            	</div>
			          	</div>
			        </div>
			        <div class="form-group">
			          	<label class="control-label col-sm-3">Address</label>
			          	<div class="col-md-8 col-sm-9">
			          		<div >
			            		<textarea name="address" class="form-control" rows="5"></textarea>
			            	</div>
			          	</div>
			        </div>
			        <div class="form-group">
						<div class="col-xs-offset-3 col-xs-10">
							<button type="submit" name="submit" class="btn btn-primary btn-md">Create</button>
						</div>
			        </div>
	      		</form>
	      		
		    </div>
		</div>
	</div>
</body>
</html>