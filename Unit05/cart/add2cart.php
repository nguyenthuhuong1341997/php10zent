<?php 
 	session_start();

 	$code = $_GET['code'];

 	
 	
 	$product['QUANTITY']=1;
 	if (!isset($_SESSION['products'][$code]['QUANTITY'])) {
 		# code...
 		$product= $_SESSION['products'][$code];
 	} else {
 		# code...
 		$_SESSION['products'][$code]['QUANTITY']++;
 	}
 	

 	$_SESSION['cart'][$code]= $product;
 	header('Location: cart.php')
 	// echo "<pre>";
 	// 	print_r($_SESSION['cart']);
 	// echo "</pre>";
 ?>