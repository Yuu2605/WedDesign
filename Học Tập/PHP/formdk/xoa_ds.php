<?php
require './xulytrangchu.php';

//thực hiện xóa danh sách
$id = isset($_POST['id']) ? (int)$_POST['id']  : '';
if ($id){
    delete_accounts($id);
}
//Trở về trang danh sách
header("location: trangchu.php");
?>