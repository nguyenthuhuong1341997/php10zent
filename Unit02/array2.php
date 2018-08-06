<?php 
	$arr=array();
	$arr[0]="Nguyễn Thu Hương";
	$arr[1]="0961222695";
	$arr[2]="www.google.com";

	echo "<br> <h3>INFOR</h3>";
	echo "<br>----------------";
	echo "<br> <b>Name: </b>".$arr[0];
	echo "<br> <b>Phone number: </b>".$arr[1];
	echo "<br> <b>Website: </b> <a href=\"".$arr[2]."\">.$arr[2].</a>";
	echo "<pre>";
		print_r($arr);
	echo "</pre>";

	// $infor=array();
	// $infor['name']="Nguyễn Thu Hương";
	// $infor['phone']="0961222695";
	// $infor['website']="www.google.com";

	// echo "<br> <h3>INFOR</h3>";
	// echo "<br>----------------";
	// echo "<br> <b>Name: </b>".$infor['name'];
	// echo "<br> <b>Phone number: </b>".$infor['phone'];
	// echo "<br> <b>Website: </b> <a href=\"".$infor['website']."\">".$infor['website']".</a>";

	// echo "<pre>";
	// 	print_r($infor);
	// echo "</pre>";

	foreach ($arr as $key => $value) {
		# code...
		echo "<br> Key: $key- value: .$value";
	}
	foreach ($arr as $a) {
		# code...
		echo "<br> $a";
	}
 ?>
 