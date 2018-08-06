<?php 
	$n= rand(1,100);
	echo "Với số n= $n ";
	echo "<br> <b>Sử dụng for</b> <br>";
	$sum=0;
	for ($i=1; $i <=$n ; $i++) { 
		# code...
		$sum+=1/$i;
	}
	echo "Tổng= $sum";

	echo "<br> <b>Sử dụng while</b> <br>";
	$sum1=0;
	$i=1;
	while ( $i<= $n) {
		# code...
		$sum1+=1/$i;
		$i++;
	}
	echo "Tổng= $sum1";

	echo "<br> <b>Sử dụng do-while</b> <br>";
	$sum2=0;
	$j=1;
	do{
		$sum2+=1/$j;
		$j++;
	}while($j<=$n);
	echo "Tổng= $sum2";
?>