<?php 
	$n= rand(1,10);
	echo "Với số n= $n ";
	echo "<br> <b>Sử dụng for</b> <br>";
	$sum=0;
	$k=1;
	for ($i=1; $i <=$n ; $i++) { 
		# code...
		$k*=$i;
		$sum+=$i/$k;
	}
	echo "Tổng= $sum";

	echo "<br> <b>Sử dụng while</b> <br>";
	$sum1=0;
	$k1=1;
	$i=1;
	while ( $i<= $n) {
		# code...
		$k1*=$i;
		$sum1+=$i/$k1;
	}
	echo "Tổng= $sum1";

	echo "<br> <b>Sử dụng do-while</b> <br>";
	$sum2=0;
	$k2=1;
	$j=1;
	do{
		$k2*=$j;
		$sum2+=$j/$k2;
	}while($j<=$n);
	echo "Tổng= $sum2";
?>