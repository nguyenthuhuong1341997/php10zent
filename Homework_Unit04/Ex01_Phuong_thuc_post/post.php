<?php 
	echo "<legend>ZENT GROUP- PHP_ Thực hành về gửi dữ liệu sử dụng POST</legend>";	
	echo "Thông tin sinh viên ";
	if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['gioitinh'])&&isset($_POST['address'])) {
		# code...
		echo("<br> Mã sinh viên: ") .$_POST['id'];
		echo("<br>Họ và tên: ") .$_POST['name'];
		echo("<br>Số điện thoại: ") .$_POST['phone'];
		echo("<br>Email: ") .$_POST['email'];
		echo("<br>Giới tính: ") .$_POST['gioitinh'];
		echo("<br>Địa chỉ: ") .$_POST['address'];
	}
 ?>