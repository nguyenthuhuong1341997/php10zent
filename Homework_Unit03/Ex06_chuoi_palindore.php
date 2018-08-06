<?php 
	$palin1="ZENTTNEZ";
	$palin2="ZENTTZEN";
	echo "Chuỗi ban đầu là: $palin1";
	$dem=$dem1=0;
	for ($i=0; $i <strlen($palin1)-1 ; ) { 
		# code...
		if (substr($palin1, $i,1)!=substr($palin1, strlen($palin1)-1-$i,1)) {
			# code...
			echo "   => không là chuỗi Palindrome" .$i;
			$dem=0;
			break;
		} else {
			# code...
			$dem++;
			$i++;
		}
		
	}
	if ($dem!=0) {
		# code...
		echo "   => là chuỗi Palindrome";
	}
	echo "<br> Chuỗi ban đầu là: $palin2";
	for ($i=0; $i <strlen($palin2)-1 ; ) { 
		# code...
		if (substr($palin2, $i,1)!=substr($palin2, strlen($palin2)-1-$i,1)) {
			# code...
			echo "   => không là chuỗi Palindrome";
			$dem1=0;
			break;
		} else {
			# code...
			$dem++;
			$i++;
		}
		
	}
	if ($dem1!=0) {
		# code...
		echo "   => là chuỗi Palindrome";
	}
?>