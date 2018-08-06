<?php 
	/**
	* 
	*/
	include_once 'models/User.php';
	class UserController 
	{
		var $user_model;
		function __construct()
		{
			# code...
			$this->user_model = new User();
		}

		function list(){		
			$postsUser = $this->user_model->list();
			require_once 'views/user/user.php';
		}

		function add(){
			require_once 'views/user/add.php';
		}

		function store(){
			$data = $_POST;
			$status = $this->user_model->insert($data);
			if ($status==1) {
				# code...
				setcookie('msg','Thêm mới thành công', time()+10);
			} else {
				# code...
				setcookie('msg1','Thêm không mới thành công', time()+10);
			}
			header('Location: ?mod=list_user&act=list');
			
		}

		function edit(){
			$id= $_GET['id'];
			$status= $this->user_model->find($id);
			require_once 'views/user/edit.php';
		}

		function update(){
			$data = $_POST;
			$id= $_GET['id'];
			
			$status = $this->user_model->update($data, $id);
			if ($status==1) {
				# code...
				setcookie('msg','Chỉnh sửa thành công', time()+10);
			} else {
				# code...
				setcookie('msg1','Chỉnh sửa không thành công', time()+10);
			}
			header('Location: ?mod=list_user&act=list');
		}

		function delete(){
			$id= $_GET['id'];
			$status = $this->user_model->delete($id);
			if ($status==1) {
				# code...
				setcookie('msg','Xóa thành công', time()+10);
			} else {
				# code...
				setcookie('msg1','Xóa không thành công', time()+10);
			}
			header('Location: ?mod=list_user&act=list');
		}
		
	}

 ?>