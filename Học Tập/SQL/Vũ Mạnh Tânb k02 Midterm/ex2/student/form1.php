<?php
	session_start();
	require('../config/connect.php')
	$ttsv = get_ttsv();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thông tin sinh viên</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<center><h1>DANH SÁCH SINH VIEN</h1></center>
<table border="2" width="100%" cellpadding="10" cellspacing="0">
	<tr align="center">
		<td>Mã Sinh Viên:</td>
		<td>Tên Sinh Viên:</td>
		<td>Mã Lớp:</td>
		<td>Ngày Sinh</td>
		<td>Giới Tính</td>
		<td>Quê Quán</td>
	</tr>
	<?php 
		foreach ($ttsv as $item )
		{
	?>
	<tr>
		<td><?php echo $item['MaSinhVien']; ?></td>
		<td><?php echo $item['TenSinhVien']; ?></td>
		<td><?php echo $item['MaLop']; ?></td>
		<td><?php echo $item['NgaySinh']; ?></td>
		<td><?php echo $item['GioiTinh']; ?></td>
		<td><?php echo $item['QueQuan'];?></td>			
	</tr>
		} 

</table>
</body>
</html>