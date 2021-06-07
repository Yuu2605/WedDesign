<?php 
	session_start();
	require('../config/connect.php');
	$masinhvien = laymsv($_POST['mal']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form action="midtest2,4.php" method="POST">
	<label>Nhập mã Lớp</label>
	<input type="text" name="mal"><br>
	<input type="submit" name="hien" value="Hiện thị">
</form>
<table border="2" width="100%" cellpadding="10" cellspacing="0">
	<tr>
		<td>Mã Sinh Viên</td>
		<td>Tùy chỉnh</td>
	</tr>
	<?php 
		foreach ($masinhvien as $item )
		{
	?>
	<tr>
		<td><?php echo $item['MaSinhVien']?></td>
		<td>
			<form method="POST" action="hiendiem.php">
				<input type="submit" name="<?php echo $item['MaSinhVien']?>">
			</form>
		</td>
	</tr>
	<?php 
	
		}
	?>
</table>
</body>
</html>