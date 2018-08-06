<?php 
	$arr=array();
	$arr[0]=rand(0,10);
	$arr[1]=rand(0,10);
	$arr[2]=rand(0,10);
	$arr[3]=rand(0,10);
	$arr[4]=rand(0,10);
	$arr[5]=rand(0,10);
	$arr[6]=rand(0,10);
	$arr[7]=rand(0,10);
	echo "Những phần tử trong mảng cho trước la: ";
	print_r($arr);
	$check=rand(0,10);
	echo "<br> Số cần kiểm tra la: $check";
	$dem=0;
	foreach ($arr as $a) {
		# code...
		if($a==$check){
			$dem++;
		}
	}
	echo "<br> Số $check xuất hiện số lần là: $dem";
?>