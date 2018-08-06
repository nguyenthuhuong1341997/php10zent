<?php 
	session_start();
	echo "<legend>ZENT GROUP- PHP_ Thực hành về gửi dữ liệu sử dụng POST</legend>";	
	echo "Thông tin sinh viên ";
	echo "<pre>";
		print_r($_SESSION['student']);
	echo "</pre>";
	require_once('email/emailfunction.php');
	$contents=" <br> Mã sinh viên:" .$_SESSION['student'][0] ."<br>Họ và tên: " .$_SESSION['student'][1] ."<br>Số điện thoại:" .$_SESSION['student'][2] ."<br>Email: " .$_SESSION['student'][3] ."<br>Giới tính: " .$_SESSION['student'][4] ."<br>Địa chỉ: " .$_SESSION['student'][5];
	send_email($_SESSION['student'][3],"thao",$contents,'$PHP10' );
	// if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['gioitinh'])&&isset($_POST['address'])) {
	// 	# code...
	// 	echo("<br> Mã sinh viên: ") .$_POST['id'];
	// 	echo("<br>Họ và tên: ") .$_POST['name'];
	// 	echo("<br>Số điện thoại: ") .$_POST['phone'];
	// 	echo("<br>Email: ") .$_POST['email'];
	// 	echo("<br>Giới tính: ") .$_POST['gioitinh'];
	// 	echo("<br>Địa chỉ: ") .$_POST['address'];
	// }
 ?>