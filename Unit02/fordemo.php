<?php 
	echo "<br> tổng 100 chữ số đầu tiên: ";
	$s=0;
	for ($i=0; $i <100 ; $i++) { 
		# code...
		$s+=$i;
	}
	echo "$s";

	echo "<br> Tổng 1+1/2+...+1/100= ";
	$s1=0;
	for ($i=1; $i <100 ; $i++) { 
		# code...
		$s1= $s1+1/$i;
	}
	echo "$s1";
	echo "<br> tổng 100 chữ số chẵn đầu tiên: ";
	$s2=0;
	for ($i=0; $i <100 ; $i++) { 
		# code...
		if ($i%2==0) {
			# code...
			$s2+=$i;
		}
	}
	echo "$s2";

	echo "<br> Tổng bình phương : ";
	$s3=0;
	for ($i=0; $i <10 ; $i++) { 
		# code...
		if ($i%2!=0) {
			# code...
			$s3+=$i*$i;
		}
	}
	echo "$s3";
 ?>