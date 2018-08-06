<?php 
	$info1=array();
	$info1['code']='123456789';
	$info1['name']='Nguyễn Thu Hương';
	$info1['email']='huong@gmail.com';
	$info1['phone']='0961222695';
	$info1['address']='Hà Nội';
	$info1['subject']=array('Toán','Lí','Hóa');
	echo "<pre>";
		print_r($info1);
	echo "</pre>";


	$info2=array();
	$info2['code']='987456321';
	$info2['name']='Ngô Thị Thúy Linh';
	$info2['email']='linh@gmail.com';
	$info2['phone']='0964745597';
	$info2['address']='Thái Bình';
	echo "<pre>";
		print_r($info2);
	echo "</pre>";

	//dưa info1 và info2 vào cùng 1 mảng tuần tự
	$CNTT1=array($info1, $info2 );
	echo "<pre>";
		print_r($CNTT1);
	echo "</pre>";
	//lấy ra tên của info1
	echo "Tên của học sinh 1: " .$CNTT1[0]['name'] .". ";
	echo "Môn học: " .$CNTT1[0]['subject'][1];
	//dưa info1 và info2 vào cùng 1 mảng không tuần tự
	$CNTT2=array(
		'info1'=>$info1,
		 'info2'=>$info2 );
	echo "<pre>";
		print_r($CNTT2);
	echo "</pre>";
	//lấy ra tên của info1
	echo "Tên của học sinh 1 trong mảng : " .$CNTT2['info1']['name'];

	$info3=array();
	$info3['code']='963258741';
	$info3['name']='Nguyễn Tuấn Anh';
	$info3['email']='beo@gmail.com';
	$info3['phone']='09549894642';
	$info3['address']='Hà Nội';
	echo "<pre>";
		print_r($info3);
	echo "</pre>";
?>