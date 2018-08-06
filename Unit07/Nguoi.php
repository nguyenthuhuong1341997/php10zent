<?php 
	/**
		* 
		*/
		class Nguoi 
		{
			var $ten;
			var $que;
			function an()
			{
				# code...
				echo "<br> Ăn cơm";
			}

			function inTT(){
				echo "<br> Họ và tên: " .$this->ten;
				echo "<br> Quê: " .$this->que;
			}

			function kiemTien(){
				echo "<br> Bán hàng siêu thị";
			}
		}	


		/**
		* 
		*/
		class SinhVien extends Nguoi
		{
			var $maSV;
			function hoc(){
				echo "<br> Sinh viên mẫu mực";
			}

			function kiemTien(){
				parent::kiemTien();
				echo "<br> Bán ...";
			}

			function SinhVien(){
				echo "Huhu";
			}
			
			function __construct(){
				echo "hihi";
			}
		}

		$beo = new SinhVien();
		$beo->maSV="123";
		$beo->ten="Tuấn Anh";
		$beo->que="Thái Bình";
		$beo->an();

		$beo->inTT();
		$beo->hoc();
		$beo->kiemTien();
 ?>