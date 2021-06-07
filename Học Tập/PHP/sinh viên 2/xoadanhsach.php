<?php
    require './process.php';
 
// Thực hiện xóa
    $id = isset($_POST['id']) ? (int)$_POST['id'] : '';
    if ($id){
    delete_thongtinsv($id);
    }
 
// Trở về trang danh sách
    header("location: listsv.php");    
?>