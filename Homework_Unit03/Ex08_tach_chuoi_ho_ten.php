<?php 
	$name="Nguyễn Thu Hương";
	echo "Chuỗi ban đầu là: $name";
	$data= explode(" ", $name);
	echo "<br> Họ: " .$data[0];
	echo "<br> Đệm: ";
	for ($i=1; $i <count($data)-1 ; $i++) { 
		# code...
		echo " " .$data[$i];
	}
	echo "<br> Tên: " .$data[count($data)-1];
?>