<?php
function get_all_accounts()
{
	$conn = mysqli_connect('localhost:8888','root','','sinhvien') or die('Lỗi kết nối');
	mysqli_set_charset($conn,"utf8");
	header('Content-Type: text/html; charset=UTF-8');
	// Thực hiện câu truy vấn lấy tất accounts trong bảng member
	$sql = "select * from member";
	$query = mysqli_query($conn,$sql);
	//Tạo một mảng chứa kết quả select đc
	$result = array();
	if ($query) {
		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}
	}
	return $result;
}
function edit_accounts($dataid,$dataname)
{
	$conn = mysqli_connect('localhost:8888','root','','sinhvien') or die('Lỗi kết nối');
	$dataname = addslashes($dataname);
	$sql = "UPDATE member SET 
				username = 	'$dataname',
				WHERE id = $dataid
	";
	$query = mysqli_query($conn,$sql);
	return $query;
}
	
function delete_accounts($acc_id)
{
	$conn = mysqli_connect('localhost:8888','root','','sinhvien') or die('Lỗi kết nối');
	$sql = "DELETE FROM member WHERE id = $acc_id";
	$query = mysqli_query($conn,$sql);
	return $query;	
}
function get_id_accounts($acc_id)
{
	$conn = mysqli_connect('localhost:8888','root','','sinhvien') or die('Lỗi kết nối');
	$sql = "select * from member where id = {$acc_id}";
	$query = mysqli_query($conn,$sql);
	$result = array();
	if (mysqli_num_rows($query)>0) {
			$row = mysqli_fetch_assoc($query);
			$result = $row;
		}
	return $result;	
}
?>
