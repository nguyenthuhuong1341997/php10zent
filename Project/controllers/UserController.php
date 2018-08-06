<?php 
	/**
	* 
	*/
	include_once 'models/User.php';
	class UserController 
	{
		var $users_model;
		function __construct()
		{
			$this->users_model= new User();
		}

		function list(){
			
			$users = $this->users_model->list();
			require_once('views/user/user.php');
		}
		function detail(){
			$id=$_GET['id'];
			$users = $this->users_model->find($id);
			require_once('views/user/detail.php');
		}
		function userprofile(){
			require_once('views/user/userprofile.php');
		}
		function update_user(){
			$data=$_POST;
			$id=$_GET['id'];
			$users = $this->users_model->update($data,$id);
			if ($admin==1) {
				setcookie('msg','Cập nhật thành công',time()+5);
			} else {
				setcookie('msg','Cập nhật không thành công',time()+5);
			}
		header('Location:?mod=user&act=list');
		}
	}
 ?>