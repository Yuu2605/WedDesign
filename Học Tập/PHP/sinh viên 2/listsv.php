<?php 
	session_start();
	require "./process.php";
	$allthongtinsv = get_all_thongtinsv();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Danh sách Sinh viên đã truy cập</title>
<head>
<body>
	<h1 align="center">Danh sách sinh viên đã truy cập</h1>
	<br/> <br/>
	<!-- <a href="thongtinsv.html"><button id="button">Thêm Sinh viên</button></a><br/>  -->
	<table border="2" width="100%" cellpadding="10" cellspacing="0">
		<tr align="center">
			<td >STT</td>
			<td>Mã sinh viên</td>
			<td>Tên sinh viên</td>
			<td>Ngày sinh</td>
			<td >Lớp</td>
			<td >Điểm tổng kết</td>
			<td>Chỉnh sửa</td>

		</tr>
		<?php foreach ($allthongtinsv as $item ) { ?>
		<tr>
			<td align="center"><?php echo $item['id'] ?></td>
			<td><?php echo $item['masv'] ?></td>
			<td><?php echo $item['tensv'] ?></td>
			<td align="center"><?php echo $item['ngaysinh'] ?></td>
			<td><?php echo $item['lop'] ?></td>
			<td align="center"><?php echo $item['diemtongket'] ?></td>
			<td>
			<form method="POST" action="xoadanhsach.php">
							<input onclick="window.location ='suadanhsach.php?id=<?php echo $item['id']; ?>' " type="button" name="edit" value="Sửa">
							<input type="hidden" name="id" value="<?php echo $item['id']; ?>" />
							<input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa" />
						</form>
            </td>
		</tr>

	<?php } ?>
	</table>
<body>