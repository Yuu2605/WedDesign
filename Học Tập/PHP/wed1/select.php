<?php
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = "sinhvien";
 $conn = mysqli_connect($hostname, $username, $password, $dbname);
 if (!$conn) {
  die('Không thể kết nối: ' . mysqli_error($conn));
  exit();
 }
 $sql = 'SELECT * FROM accounts';
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    // Hiển thị kết quả
  while($row = mysqli_fetch_assoc($result)) {
    echo "Account Name: " . $row["accountname"]. ", Account Password: " . $row["accountpwd"]. "<br>";
  }
 } else {
    echo "Không có tài khoản nào";
 } 
 mysqli_close($conn);
?>