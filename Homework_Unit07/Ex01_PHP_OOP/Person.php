<?php 
	/**
	* 
	*/
	class Person
	{	
		var $name;
		var $dateOfBirth;
		var $hometown;
		var $sex;
		
		function inTT()
		{
			# code...
			echo "---------Thông tin---------";
			echo "<br> Họ và tên : " .$this->name;
			echo "<br> Ngày sinh: " .$this->dateOfBirth;
			echo "<br> Quê quán: " .$this->hometown;
			echo "<br> Giới tính: " .$this->sex;
		}
	}
 ?>