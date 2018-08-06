<?php 
	/**
	* 
	*/
	require_once "Person.php";
	class SinhVien extends Person
	{
		var $maSV;
		var $lop;
		var $khoa;
		var $truong;
		var $diemTB;

		function inTT(){
			parent:: inTT();
			echo "<br> Mã sinh viên: " .$this->maSV;
			echo "<br> Lớp: " .$this->lop;
			echo "<br> Khoa: " .$this->khoa;
			echo "<br> Trường: " .$this->truong;
			echo "<br> Điểm trung bình: " .$this->diemTB;
		}
		
	}
 ?>