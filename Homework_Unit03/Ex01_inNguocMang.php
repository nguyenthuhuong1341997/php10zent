<?php 
	$arr=array( 1, 3, 5, 9, 11);
	echo "Mảng ban đầu là: ";
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	echo "<br> Mảng sau khi đảo ngược là: ";
	for ($i=0; $i <count($arr) ; $i++) { 
		# code...
		echo "<pre>";
			print_r($arr[count($arr)-1-$i]);
		echo "</pre>";
	}
?>