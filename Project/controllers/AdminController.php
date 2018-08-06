<?php 
	/**
	* 
	*/
	include_once 'models/Admin.php';
	class AdminController 
	{
		var $admin_model;
		function __construct()
		{
			$this->admin_model= new Admin();
		}
		function admin(){
			require_once('views/admin/admin.php');
		}
		function add_user(){
			require_once('views/admin/user/add.php');
		}
		function store(){
			$data=$_POST;
			$admin = $this->admin_model->insert($data);
			if ($admin==1) {
				setcookie('msg3','Thêm mới thành công',time()+5);
			} else {
				setcookie('msg3','Thêm mới không thành công',time()+5);
			}
			header('Location:?mod=admin&act=list_user');
		}

		function list_user(){
			$admin = $this->admin_model->list();
			require_once('views/admin/user/list.php');
		}
		function edit_user(){
			$id=$_GET['id'];
			$admin=$this->admin_model->find($id);
			require_once('views/admin/user/edit.php');
		}
		function detail(){
			$id=$_GET['id'];
			$admin = $this->admin_model->find($id);
			require_once('views/admin/detail.php');
		}
		function update_user(){
			$data=$_POST;
			$id=$_GET['id'];
			$admin = $this->admin_model->update($data,$id);
			if ($admin==1) {
				setcookie('msg','Cập nhật thành công',time()+5);
			} else {
				setcookie('msg','Cập nhật không thành công',time()+5);
			}
			header('Location:?mod=admin&act=list_user');
		}
		function delete_user(){
			$id=$_GET['id'];
			$admin=$this->admin_model->delete($id);
			if ($admin==1) {
				setcookie('msg','Xóa thành công',time()+5);
			} else {
				setcookie('msg','Xóa không thành công',time()+5);
			}
			header('Location:?mod=admin&act=list_user');
		}


		function add_post(){
			require_once('views/admin/post/add.php');
		}
		function store_post(){
			$data=$_POST;
			$admin = $this->admin_model->insert_post($data);
			echo "$admin";
			if ($admin==1) {
				setcookie('msg','Thêm mới thành công',time()+5);
			} else {
				setcookie('msg','Thêm mới không thành công',time()+5);
			}
			header('Location:?mod=admin&act=list_post');
		}

		function list_post(){
			$admin = $this->admin_model->list_post();
			require_once('views/admin/post/list.php');
		}
		function edit_post(){
			$id=$_GET['id'];
			$admin=$this->admin_model->find_post($id);
			require_once('views/admin/post/edit.php');
		}
		function update_post(){
			$data=$_POST;
			$id=$_GET['id'];
			$admin = $this->admin_model->update_post($data,$id);
			if ($admin==1) {
				setcookie('msg','Cập nhật thành công',time()+5);
			} else {
				setcookie('msg','Cập nhật không thành công',time()+5);
			}
			header('Location:?mod=admin&act=list_post');
		}
		function delete_post(){
			$id=$_GET['id'];
			$admin=$this->admin_model->delete_post($id);
			if ($admin==1) {
				setcookie('msg','Xóa thành công',time()+5);
			} else {
				setcookie('msg','Xóa không thành công',time()+5);
			}
			header('Location:?mod=admin&act=list_post');
		}
	}
 ?>