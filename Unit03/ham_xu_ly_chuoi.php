<?php 
	$name="Nguyễn Thu Huong - Học viện công nghệ bưu chính viễn thông";
	$password='123456789';
	$arr_info= explode("-", $name);
	echo "<pre>";
		print_r($arr_info);
	echo "</pre>";

	$arr_info2= implode("\t", $arr_info);
	echo "<pre>";
		print_r($arr_info2);
	echo "</pre>";

	echo "<br> Do dai chuoi: " .strlen($name);
	echo "<br>" .str_repeat('<br> Good bye! ', 10);
	echo "<br> " .str_replace("Huong", 'Hương', $name);
	//cat chuoi Con
	echo "<br> Cắt chuỗi con:".substr($name,2,10); // cat tu vi tri 2, chuoi con co do dai 10

	echo "<br>".strstr($name,"Học");
	// Cat chuoi con bat dau tu chu Be
 ?>