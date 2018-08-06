<?php 
	session_start();
	$_SESSION['products']= array(
							'SP01' =>array(
								'CODE' =>'SP01',
								'NAME' => 'IP X',
								'PRICE'=> '29000000',
								'QUANTITY'=>'30'
							),
							'SP02' =>array(
								'CODE' =>'SP02',
								'NAME' => 'IP 8',
								'PRICE'=> '19000000',
								'QUANTITY'=>'20'
							),
							'SP03' =>array(
								'CODE' =>'SP03',
								'NAME' => 'IP 7',
								'PRICE'=> '9000000',
								'QUANTITY'=>'50'
							),
						);

	$products = $_SESSION['products'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="http://code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<h3>CART LIST</h3>
 		<a href="add.php" class="btn btn-success">Add </a>
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>CODE</th>
 					<th>NAME</th>
 					<th>PRICE</th>
 					<th>QUANTITY</th>
 					<th>ACTION</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 					foreach ($products as $product) {
 						# code...
 					
 				 ?>
 				<tr>
 					<td><?= $product['CODE'] ?></td>
 					<td><?= $product['NAME'] ?></td>
 					<td><?= $product['PRICE'] ?></td>
 					<td><?= $product['QUANTITY'] ?></td>
 					<td>
						<a href="add2cart.php?code=<?= $product['CODE'] ?>" class="btn btn-success">Add to Cart</a>
 					</td>
 				</tr>
 				<?php } ?>
 			</tbody>
 		</table>
 	</div>

 </body>
 </html>