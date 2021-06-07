<?php
	session_start();
	require('../config/connect.php');
	$MASV = laydiem($_POST['masv']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form action="form2.php" method="POST">
	<label>Nhập mã sinh viên</label>
	<input type="text" name="masv"><br>
	<input type="submit" name="hien" value="Hiện thị">
</form>

<table border="2" width="100%" cellpadding="10" cellspacing="0">
	<tr align="center">
		<td>Mã Sinh Viên:</td>
		<td>Học Kỳ :</td>
		<td>Tên Môn Học :</td>
		<td>Điểm Lần 1</td>
		<td>Điểm lần 2</td>
	</tr>
	<?php 
		foreach ($MASV as $item )
		{
	?>
	<tr>
		<td><?php echo $item['MaSinhVien'] ?></td>
		<td><?php echo $item['HocKy'] ?></td>
		<td><?php echo $item['TenMonHoc'] ?></td>
		<td><?php echo $item['Diemlan1'] ?></td>
		<td><?php echo $item['Diemlan2'] ?></td>		
	</tr>
	<?php 
		} 
	?>
</table>
</body>
</html>