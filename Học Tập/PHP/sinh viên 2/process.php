<?php
    function get_all_thongtinsv()
    {
      $conn = mysqli_connect('localhost','root','vertrigo','sinhvien') or die('Lỗi kết nối');
        mysqli_set_charset($conn,"utf8");
        header('Content-Type: text/html; charset = UTF-8');

        $sql = "select * from thongtinsv";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[]=$row;
            }
        }
        return $result; 
    }
    
        function get_id_thongtinsv($thongtinsv_id)
    {
    // Hàm kết nối
    $conn = mysqli_connect('localhost','root','vertrigo','sinhvien');
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from thongtinsv where id = {$thongtinsv_id}";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
     
    // Trả kết quả về
    return $result;
    }

    
    
        function delete_thongtinsv($thongtinsv_id)
    {

    $conn = mysqli_connect('localhost','root','vertrigo','sinhvien');
     
    // Câu truy sửa
    $sql = "
            DELETE FROM thongtinsv
            WHERE id = $thongtinsv_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
    }
?>