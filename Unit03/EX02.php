<?php 
	$arr= array('Manh','Hung','Linh','Huong', 'Manh',);
	echo "<pre>";
		print_r($arr);
	echo "</pre>";

	//kiem tra 1 phan tu có trong mảng hay không
	var_dump(in_array('Manh', $arr));
	var_dump(in_array('ZENT', $arr));
	//dem so luong phan tu trong mang
	echo "<br> Số lượng có phần tử trong mang arr: " .count($arr);

	$info2=array();
	$info2['code']='987456321';
	$info2['name']='Ngô Thị Thúy Linh';
	$info2['email']='linh@gmail.com';
	$info2['phone']='0964745597';
	$info2['address']='Thái Bình';

	//hàm kiểm tra phần tử có tồn tại tỏng mảng hay không
	if (array_key_exists('name1', $info2)) {
		# code...
		echo $info[name];
	} else {
		# code...
		echo "<br> Không tồn tại <br>";
	}
	
	var_dump(array_search('Linh', $arr));
	var_dump(array_search('Linh1', $arr));
	if (array_search('Linh', $arr)!=false) {
		# code...
		echo "<br> Index la: " .array_search('Linh', $arr);
	} else {
		# code...
		echo "<br> Không tồn tại <br>";
	}
	
	//Dem so lần xuát hiện các phần tử trong mảng
	$result= array_count_values($arr);
	echo "<pre>";
		print_r($result);
	echo "</pre>";

	echo "Phan tu bi xóa: " .array_pop($arr);

	//array_push là thêm phần tử vào cuối mảng
	//array_unshift là thêm phần tử vào đầu mẩng
?>