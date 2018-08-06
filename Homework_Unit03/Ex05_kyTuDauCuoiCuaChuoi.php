<?php 
	$string= "Nguyễn Thu Hương";
	echo "Chuỗi ban đầu là: " .$string;
	echo "<br> Kí tự đầu tiên của chuỗi là: " .substr($string, 0,1);
	echo "<br> Kí tự cuối cùng của chuỗi là: " .substr($string, strlen($string)-1);
?>