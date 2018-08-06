<?php 
	$n= rand(1,100);
	$sum=0;
	echo "Tổng " .$n ." số tự nhiên đầu tiên là: ";
	for ($i=0; $i <$n ; $i++) { 
		# code...
		$sum+=$i;
	}
	echo "$sum";
?>