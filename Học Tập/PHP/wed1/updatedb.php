<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "sinhvien";
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
	die('Không thể kết nối:' .mysqli_error($conn));
	exit();
}
$sql = 'UPDATE accounts SET accountpwd = "12345678" WHERE accountname = "ndan_cntt"';
$ret = mysqli_query($conn,$sql);
if ($ret) {
	die("không thể thêm dữ liệu vào db: " .mysqli_error($conn));
}
echo "Thêm dữ liệu thành công, mật khẩu được thay đổi";
mysqli_close($conn);
?>