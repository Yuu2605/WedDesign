<?php
session_start();
if (isset($_POST['savesession'])) {
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>User name:<input type="text" name="user name" value=""></p>
        <p>Password:<input type="text" name="password" value=""></p>
        <p><input type="submit" name="savesession" value="Lưu session"></p>
        <?php
            if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
                echo "Tên đăng nhập là:" .$_SESSION['name'];
                echo "<br/>";
                echo "Mật khẩu nhập là:" .$_SESSION['password'];
            }
        ?>

    </form>
</body>
</html>