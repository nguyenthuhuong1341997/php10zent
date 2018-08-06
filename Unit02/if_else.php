<?php 
	$num =10;
	if ($num%2==0) {
		# code...
		echo "<br>".$num ." là số chẵn";
		if ($num>0) {
			# code...
			echo " Và là số dương";
		} else {
			# code...
			echo " Và là số âm";
		}
		
	}else{
		echo "<br>".$num ." là số lẻ";
		if ($num>0) {
			# code...
			echo "Và là số dương";
		} else {
			# code...
			echo "Và là số âm";
		}
	}
?>