<?php 
	$a=12;
	$b=7;
	echo "Với a= $a <br>";
	echo "Với b= $b <br>";
	echo "Tổng hai số a và b la: " .($a+$b) ."<br>";
	echo "Hiệu hai số a và b la: " .($a-$b) ."<br>";
	echo "Tích hai số a và b la: " .($a*$b) ."<br>";
	if ($b==0) {
		echo "Phép chia không thực hiện được";
	} else {
		echo "Thương của hai số a và b là: " .($a/$b) ."<br>";
		echo "Phần dư của hai số a và b là: " .($a%$b) ."<br>";
	}
	
 ?>