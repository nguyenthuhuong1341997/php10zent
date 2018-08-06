<?php 
	$m=0;
	
	for ($i=1; $i <=100 ; $i++) { 
		# code...
		if (($i%3==0)|| ($i%7==0)) {
			# code...
			$m++;
		}
		
	}
	echo "<br> Số  lượng các số nguyên chia hết cho 3 hoặc 7 nằm  trong đoạn 1 đến 100 là $m";
?>