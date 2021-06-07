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
$sql = 'INSERT INTO accounts VALUES ("ndan_gtvt","abc12345678")';
$ret = mysqli_query($conn,$sql);
if (!$ret) {
	die('Không thể thêm dữ liệu' .mysqli_error($conn));
}
echo "Thêm dữ liệu thành công";
mysqli_close($conn);
?>