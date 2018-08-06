<?php 
	session_start();
	

	$products = $_SESSION['cart'];
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
 		<h3>CART</h3>
 		<a href="index.php" class="btn btn-success">Back</a>
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>CODE</th>
 					<th>NAME</th>
 					<th>PRICE</th>
 					<th>QUANTITY</th>
 					<th>AMOUNT</th>
 					<th>ACTION</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 					$sum=0;
 					foreach ($products as $product) {
 						# code...
 						$sum+= $product['QUANTITY']*$product['PRICE'];
 					
 				 ?>
 				<tr>
 					<td><?= $product['CODE'] ?></td>
 					<td><?= $product['NAME'] ?></td>
 					<td align="right"><?= number_format($product['PRICE']) ?></td>
 					<td align="center"><?= $product['QUANTITY'] ?></td>
 					<td align="right"><?= number_format($product['QUANTITY']*$product['PRICE']) ?></td>
 					<td>
						<a href="add2cart.php?code=<?= $product['CODE'] ?>" class="btn btn-success">Delete</a>
 					</td>
 				</tr>
 				<?php } ?>
 				<tr>
 					<td colspan="4"></td>
 					<td align="right"><?= number_format($sum)?></td>
 					<td></td>
 				</tr>
 			</tbody>

 		</table>
 	</div>

 </body>
 </html>