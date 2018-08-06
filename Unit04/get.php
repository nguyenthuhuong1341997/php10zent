<?php 
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	
	if (isset($_GET['course'])) {	//kiemtraxem có tồn tại hay không
		# code...
		echo "<br> Khóa học: " .$_GET["course"];
	}
?>