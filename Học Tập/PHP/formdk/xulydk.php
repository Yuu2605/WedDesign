<?php
	if (!isset($_POST['username'])) {
		die('');
	}
	$conn = mysqli_connect('localhost','root','','sinhvien');
	mysqli_set_charset($conn,"utf8");
	header('Content-Type: text/html; charset=UTF-8');
    $id        = addslashes($_POST['id']);
	$username  = addslashes($_POST['username']);
	$password  = addslashes($_POST['password']);
	$sex	   = addslashes($_POST['selSex']); 
	$address   = addslashes($_POST['address']);
	$telephone = addslashes($_POST['telephone']);
	$email     = addslashes($_POST['email']);

	if (!$id || !$username || !$password || !$sex  ) {
		echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Quay trở lại</a>";
		exit;
	}
	$password = md5($password);

	$sql = "SELECT * FROM member WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		echo "Tên đăng nhập này đã tồn tại. Vui lòng chọn tên đăng nhập khác.<a href='javascript:history.go(-1)'>Quay trở lại</a>";
		exit;
	}
	$sql = "INSERT INTO member (id,username,password,sex,address,telephone,email) VALUES ('$id','$username','$password','$sex','$address','$telephone','$email')";
	$addmember = mysqli_query($conn,$sql);
	if ($addmember) 
		echo "Quá trình đăng ký thành công. <a href='form_dn.php'>Về trang đăng nhập</a>";
	else
		echo "Có lỗi trong quá trình đăng ký. <a href='form_dk.php'>Vui lòng thử lại</a>";

?>