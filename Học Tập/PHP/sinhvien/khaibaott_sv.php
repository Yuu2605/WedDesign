<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khai báo thông tin sinh viên </title>
</head>
<body>
    <form nethod="POST" action="xulykhaibao.php">
    <p>Id :<input type="text" name="id" value="" size="20"> </p>
    <p>User Name:<input type="text" name="username" value="" size="20"> </p>
    <p>Password:<input type="text" name="password"value="" size="20"> </p>
    <p>Tên sinh viên :<input type="text" name="tensv" value="" size="20" > </p>
    <p>Ngày sinh :<input type="text" name="ngaysinh" value="" size="20"> </p>
    <p>Lớp :<input type="text" name="lop" value="" size="20" > </p>
    <p>Điểm tổngtổng kết :<input type="text" name="diemtongket" value="" size="20" > </p>

    <p><input type="submit" name="click_reg" value="Đăng Ký" > </p>
    <p><input type="reset" name="click_reset" value="Reset" > </p>
    </form>
</body>
</html>