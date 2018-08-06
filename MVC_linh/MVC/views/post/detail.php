<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		i{
			color: #00daff;
		}
		p{
			line-height: 16pt;
			font-size: 12pt;
		}
		h4{
			line-height: 18pt;
			font-size: 15pt;
			text-indent: initial;
			color: #000;
		}
		h1{
			text-align: center;
			font-size:35pt;
			color: #b5124d;
		}
		img{
			padding-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 ><?= $post['title']?></h1>
				<i><h4> <?=$post['short_content']?></h4></i>
				<img src="<?=$post['image']?>" class="img-responsive col-md-8 col-md-offset-1">
			</div>
			
		</div>
		<div class="row">
			<p><?=$post['contents']?></p>
			<div style="text-align: right">
				<p>Post by <i><?=$post['author']?></i> on <i><?=$post['date_public']?></i></p>
			</div>
		</div>
	</div>
</body>
</html>