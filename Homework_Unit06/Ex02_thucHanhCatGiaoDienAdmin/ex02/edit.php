<?php 

	session_start();

	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	foreach ($_POST as $key => $value) {
		$_SESSION['info'][$id] = array(
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'gender' => $_POST['gender'],
			'address' => $_POST['address']
		);
		header('Location: list.php');
		setcookie('msg', 'Sửa thành công!', time() + 5);
	}

 ?>