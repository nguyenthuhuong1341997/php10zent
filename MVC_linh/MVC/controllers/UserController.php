<?php 
	/**
	* 
	*/
include_once('models/User.php');

	class UserController
	{
		var $users_model;
		function __construct()
		{
			$this->users_model= new User();
		}

		function list(){
			$users = $this->users_model->list();
			require_once('views/user/list.php');
		}

		function add_user(){
			require_once('views/admin/user/add.php');
		}
		function store(){
			$data=$_POST;
			$users = $this->users_model->insert($data);
			if ($users==1) {
				setcookie('msg','Thêm mới thành công',time()+5);
			} else {
				setcookie('msg','Thêm mới không thành công',time()+5);
			}
			header('Location:?mod=user');
		}

		function edit(){
			$id=$_GET['id'];
			$user=$this->admin_model->find($id);
			require_once('views/admin/user/edit.php');
		}
		function update(){
			$data=$_POST;
			$id=$_GET['id'];
			$user = $this->users_model->update($data,$id);
			if ($user==1) {
				setcookie('msg','Cập nhật thành công',time()+5);
			} else {
				setcookie('msg','Cập nhật không thành công',time()+5);
			}
			header('Location:?mod=user');
		}
		function delete(){
			$id=$_GET['id'];
			$user=$this->users_model->delete($id);
			if ($user==1) {
				setcookie('msg','Xóa thành công',time()+5);
			} else {
				setcookie('msg','Xóa không thành công',time()+5);
			}
			header('Location:?mod=user');
		}
		function detail(){
			$id=$_GET['id'];
			$user=$this->users_model->find($id);
			require_once('views/admin/user/detail.php');
		}
	}
?>