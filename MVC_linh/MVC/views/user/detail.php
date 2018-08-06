<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<style type="text/css">
		
		h1{
			font-size:20pt;
			color: #b5124d;
		}
		.span4 .fa{
			font-size: 13pt;
			padding-right: 5px;
		}
		.span4 span{
			font-size: 13pt;
			color: #000;
		}
		.container{
			padding-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container"> 
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="span2 col-md-4"> 
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYS4tl1dREVxf7mwPsx34byYXLtCAtb5kpnBiuExTqZXMC_GtpqQ" alt="" class="img-rounded">
			</div> 
			<div class="span4 col-md-offset-1 col-md-6">
				<blockquote>
				  	<h1><?=$user['name']?></h1>
				</blockquote> 
				<p>
					<i class="fa fa-envelope"></i> <span>Email: <?=$user['email']?></span>
					<br>
					<i class="fa fa-phone"></i><span>Phone: <?=$user['phone']?></span>
					<br>
					<i class="fa fa-map-marker"></i><span>Address: <?=$user['address']?> </span>
				</p>
			</div>
		</div> 
		
	</div>
</div>
</body>
</html>

