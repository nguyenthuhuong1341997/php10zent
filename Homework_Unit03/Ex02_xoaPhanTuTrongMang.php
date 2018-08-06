<?php 
	$arr= array(2, 4, 6, 1, 7, 4, 8);
	echo "Mảng đã cho là: ";
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	$k= rand(1,count($arr));
	$arr1=array();
	$arr2=array();
	echo " <br> Vị trí phần tử cần xóa là: " .$k;
	for ($i=0; $i <$k-1 ; $i++) { 
		# code...
		$arr1[$i]=$arr[$i];
	}
	for ($i=0; $i <count($arr)-$k ; $i++) { 
		# code...
		$arr1[$i+$k-1]=$arr[$i+$k];
	}
	
	echo "<pre>";
		print_r($arr1);
	echo "</pre>";
?>