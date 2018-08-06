<?php 
	class SinhVien{
		var $maSV;
		var $name;
		var $que;
		var $lop;
		
		function diHoc()
		{
			# code...
			echo "<br> Sinh viên đi học";
		}

		function choiGame()
		{
			# code...
			echo "<br> Sinh viên thích chơi game";
		}

		function inTT(){
			echo "<br> ---- THÔNG TIN SINH VIÊN ----";
			echo "<br> Xin chào " .$this->name;
			echo "<br> Quê quán: " .$this->que;
		}
	}
	//khơi rtaoj đối tượng từ lớp sinh viên
	$huong= new SinhVien();
	$huong-> diHoc();

	$huong->name="Nguyễn Thu Hương";
	$huong->que="Hà Nội";
	$huong->lop="D15CQCN02-B";

	echo "<br> Xin chào " .$huong->name;
	echo "<br>" .$huong->que;

	echo "<br> ---- THÔNG TIN SINH VIÊN ----";
	echo "<br> Xin chào " .$huong->name;
	echo "<br> Quê quán: " .$huong->que;

	$linh= new SinhVien();
	$linh-> diHoc();

	$linh->name="Linh";
	$linh->que="Thái Bình";
	$linh->lop="D15CQCN02-B";

	$linh->inTT();

	session_start();
	$_SESSION['linh']= $linh;
	$linh_sess= $_SESSION['linh'];

	echo "<br>";
	echo "Họ và tên: " .$linh_sess->name;
	echo "<br>";
	var_dump($linh_sess);
 ?>