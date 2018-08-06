<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	
	<form action="add_process.php" method="POST" role="form" style="width: 70%; padding-left: 20%">
		<center>
			<legend>ZENT GROUP- PHP_ SESSION</legend>
		</center>
		
		<div class="form-group " id="">
			<label for="">Mã sinh viên</label>
			<input type="text" class="form-control" id="" name="id" placeholder="Input field" required="">
			<label for="">Họ tên</label>
			<input type="text" class="form-control" id="" name="name" placeholder="Input field" required="">
			<label for="">Số điện thoại</label>
			<input type="text" class="form-control" id="" name="phone" placeholder="Input field" required="">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" name="email" placeholder="Input field" required="">
			<label for="">Giới tính</label>
			<input name="gioitinh" type="radio" value="Nam" />Nam
			<input name="gioitinh" type="radio" value="Nữ" />Nữ
			<input name="gioitinh" type="radio" value="Khác" />Khác <br>
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" id="" name="address" placeholder="Input field" required="">
		</div>	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
</body>
</html>