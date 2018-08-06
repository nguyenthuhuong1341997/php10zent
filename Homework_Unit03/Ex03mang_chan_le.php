<?php 
	$arr= array(2, 3, 8, 1, 7, 9, 6, 12, 15, 13);
	echo "Mảng đã cho là: ";
	for ($i=0; $i <count($arr) ; $i++) { 
		# code...
		echo "\t" .$arr[$i];
	}
	echo "<br> Danh sách các số chẵn trong mảng là: ";
	for ($i=0; $i <count($arr) ; $i++) { 
		# code...
		if ($arr[$i]%2==0) {
			# code...
			echo "\t" .$arr[$i];
		}
	}

	echo "<br> Danh sách các số lẻ trong mảng là: ";
	for ($i=0; $i <count($arr) ; $i++) { 
		# code...
		if ($arr[$i]%2!=0) {
			# code...
			echo "\t" .$arr[$i];
		}
	}
?>