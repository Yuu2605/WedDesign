<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['dangnhap'])) {
    $conn = mysqli_connect('localhost','root','','sinhvien') or die('lỗi kết nối');

    mysqli_set_charset($conn,"utf8");
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    if (!$username || !$password) {
        echo "vui lòng nhập đủ thông tin. <a href= 'javascript:history.(-1)'>Trở về<a/>";
        exit();
    }
    $password = md5($password);
    $sql = "SELECT username,password FROM member WHERE username= '$username'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) ==0) {
    echo "tên tài khoản đăng nhập không tồn tại. <a href= 'javascript:history.go(-1)'>trở về<a/>";
    exit();
    }
$row = mysqli_fetch_array($result);
if ($password != $row['password']) {
    echo "Mật khẩu không đúng, yêu cầu đăng nhập lại. <a href='javascript.go(-1)>trở về <a/>'";
    exit();
}
$_SESSION['username']= $username;
echo "Đăng nhập thành công. <a href='trangchu.php'.>Trở về trang chủ<a/> ";
die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
</head>
<body>
    <form action="form_dn.php?do=login" method="POST">
        <p>Tên đăng nhập:<input type="text" name="username"></p>
        <p>Mật khẩu:<input type="text" name="password"></p>
        <p><input type="submit" name="dangnhap" value="Đăng nhập"> </p>
        <a href="form_dk.php" tile="Đăng ký"> ĐĂNG ký tài khoản</a>

    </form>
</body>
</html>