<?php 
	echo "Tổng 10 số chẵn đầu tiên <br>";
	$j=0;
	$sum=0;
	echo "<b> Sử dụng vòng lặp for </b> <br>";
	for ($i=1; $i <100 ; $i++) { 
		# code...
		if ($i%2==0) {
			# code...
			$sum+=$i;
			$j++;
			if ($j==10) {
				# code...
				break;
			}
		}
	}
	echo "$sum";

	$j1=0;
	$sum1=0;
	$i=0;
	echo "<br> <b> Sử dụng vòng lặp white </b> <br>";
	while ( $j1< 10) {
		# code...
		$i+=2;
		$sum1+=$i;
		$j1++;
	}
	echo "$sum1";

	$j2=0;
	$sum2=0;
	$i=0;
	echo "<br> <b> Sử dụng vòng lặp do-white </b> <br>";
	do{
		$i+=2;
		$sum2+=$i;
		$j2++;
	}while($j2< 10);
	echo "$sum2";
?>