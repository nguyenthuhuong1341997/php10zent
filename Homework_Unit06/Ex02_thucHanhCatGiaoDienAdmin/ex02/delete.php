
// delete 

<?php 

	session_start();

	$id = $_GET['id'];
	
	if(isset($id)){
		foreach ($_SESSION['info'] as $key => $value) {
			if($key == $id){
				unset($_SESSION['info'][$key]);
				header('Location: list.php');
				setcookie('msg', 'Xóa thành công!', time() + 5);
			}
		}
	}

 ?>