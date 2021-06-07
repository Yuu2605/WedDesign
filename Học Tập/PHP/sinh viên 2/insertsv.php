<?php
	if (!isset($_POST['masv'])) {
		die('');
	}
	$conn = mysqli_connect('localhost','root','vertrigo','sinhvien');
	mysqli_set_charset($conn,"utf8");
	header('Content-Type: text/html; charset=UTF-8');
	
	$masv=addslashes($_POST['masv']);
	$tensv=addslashes($_POST['tensv']);
	$ngaysinh = addslashes($_POST['ngaysinh']);
	$lop = addslashes($_POST['lop']);
	$diemtongket = addslashes($_POST['diemtongket']);
	if (!$masv || !$tensv || !$ngaysinh || !$lop || !$diemtongket) {
	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascripts: history.go(-1)'>Quay trở lại</a>";
	exit;
	}
	/*$sql = "SELECT * FROM thongtinsv WHERE masv = '$masv'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		echo "Tên đăng nhập này đã tồn tại. Vui lòng chọn tên đăng nhập khác.<a href='dk_khachhang.php'>Quay trở lại</a>";
		exit;
	}*/
	$sql = "INSERT INTO thongtinsv (masv,tensv,ngaysinh,lop,diemtongket) VALUES ('$masv','$tensv','$ngaysinh','$lop','$diemtongket')";
	$addthongtinsv = mysqli_query($conn,$sql);
	if ($addthongtinsv) 
		echo "Quá trình lưu thành công.<a href='listsv.php'>Danh sách sinh viên đã kết nối</a>";
	else
		echo "Có lỗi trong quá trình lưu. <a <a href='javascripts: history.go(-1)'>Quay trở lại đăng ký khách hàng</a>";
?>