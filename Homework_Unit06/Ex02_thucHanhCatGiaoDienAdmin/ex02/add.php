

<?php 

	session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Bài 02 - Zent Group</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		body {
			width: 100%;
			margin: 0 auto;
		}
		form{
			width: 85%;
			padding-left: 30%;
		}
		legend {
			margin: 2% auto;
			text-align: center;
		}

		div {
			margin: 1% auto;
		}
		
		label {
			margin-top: 2%;
		}
	</style>
</head>
<body>

	<?php 

		if (!isset($_POST['submit'])) {

		}

	?>

	<?php 
			
		if(!isset($_GET['id'])){

	?>
	<?php 
		include('huong.php');
	 ?>
			<form action="add_process.php" method="POST" role="form">
				<legend>Zent Group</legend>
				<legend>Bài 02 - Lưu thông tin sinh viên vào session</legend>
				
					<div class="form-group">
						<label for="">Mã Sinh Viên</label>
						<input type="text" class="form-control" id="" name="id" placeholder="Nhập mã sinh viên" required="required">

						<label for="">Họ Và Tên</label>
						<input type="text" class="form-control" id="" name="name" placeholder="Nhập họ và tên đầy đủ" required="required">

						<label for="">Số Điện Thoại</label>
						<input type="text" class="form-control" id="" name="phone" placeholder="Số điện thoại chính của bạn" required="required">

						<label for="">Email</label>
						<input type="email" class="form-control" id="" name="email" placeholder="Nhập vào Email" required="required">

						<label for="">Giới Tính</label><br>
						<input type="radio" name="gender" checked value="Nam">Nam&nbsp;&nbsp;&nbsp;
						<input type="radio" name="gender" value="Nữ">&nbsp;Nữ&nbsp;&nbsp;&nbsp;
						<input type="radio" name="gender" value="Chưa xác định">&nbsp;Chưa xác định<br>

						<label for="">Địa Chỉ</label>
						<input type="text" class="form-control" id="" name="address" placeholder="Địa chỉ bạn đang thường trú" required="required">
					</div>

			
				<button type="submit" class="btn btn-primary" id="button" name="submit">Lưu Thông Tin</button>
			</form>

	<?php

		} else if (isset($_GET['id'])) {
			foreach ($_SESSION['info'] as $key => $value) {
				if($key == $_GET['id']){

	 ?>

					<form action="edit.php" method="POST" role="form">
						<legend>Zent Group</legend>
						<legend>Bài 02 - Lưu thông tin sinh viên vào session</legend>
						
							<div class="form-group">
								<label for="">Mã Sinh Viên</label>
								<input type="text" class="form-control" id="" name="id" placeholder="Nhập mã sinh viên" required="required" value="<?php echo $value['id']; ?>">

								<label for="">Họ Và Tên</label>
								<input type="text" class="form-control" id="" name="name" placeholder="Nhập họ và tên đầy đủ" required="required" value="<?php echo $value['name']; ?>">

								<label for="">Số Điện Thoại</label>
								<input type="text" class="form-control" id="" name="phone" placeholder="Số điện thoại chính của bạn" required="required" value="<?php echo $value['phone']; ?>">

								<label for="">Email</label>
								<input type="email" class="form-control" id="" name="email" placeholder="Nhập vào Email" required="required" value="<?php echo $value['email']; ?>">

								<label for="">Giới Tính</label><br>
								<input type="radio" name="gender" checked value="Nam">Nam&nbsp;&nbsp;&nbsp;
								<input type="radio" name="gender" value="Nữ">&nbsp;Nữ&nbsp;&nbsp;&nbsp;
								<input type="radio" name="gender" value="Chưa xác định">&nbsp;Chưa xác định<br>

								<label for="">Địa Chỉ</label>
								<input type="text" class="form-control" id="" name="address" placeholder="Địa chỉ bạn đang thường trú" required="required" value="<?php echo $value['address']; ?>">
							</div>

					
						<button type="submit" class="btn btn-primary" id="button" name="submit">Lưu Thông Tin</button>
					</form>

	<?php 

				}
			}
		}

	 ?>

</body>
</html>




