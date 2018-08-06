<?php 
	
	require_once "SinhVien.php";

	$huong= new SinhVien();
	$huong->name="Nguyễn Thu Hương";
	$huong->dateOfBirth="13/04/1997";
	$huong->hometown="Hà Nội";
	$huong->sex="Nữ";
	$huong->maSV="B15DCCN266";
	$huong->lop="D15CQCN02-B";
	$huong->khoa="CNTT";
	$huong->truong="PTIT";
	$huong->diemTB="2.0";
	$huong->inTT();

 ?>