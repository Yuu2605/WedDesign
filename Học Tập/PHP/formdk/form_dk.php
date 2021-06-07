<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng ký thông tin thành viên </title>
</head>
<body>
    <form method="POST" action="xulydk.php">
    <p>Id :<input type="text" name="id" value="" size="20">  </p>
    <p>User Name:<input type="text" name="username" value="" size="20"> </p>
    <p>Password:<input type="text" name="password"value="" size="20"> </p>
    <p>
        Sex:<select name="selSex">
            <option value="1">Male</option>
            <option value="0">Female</option>
        </select>
    <p>Address:<input type="text" name="address" value="" size="20"> </p>
    <p>Telephone:<input type="text" name="telephone" value="" size="20"> </p>
    <p>Email:<input type="text" name="email" value="" size="20"> </p>

    <p><input type="submit" name="click_reg" value="Đăng ký"></p>
    <p><input type="reset" name="click_reset" value="Reset"></p>

</form>
    
</body>
</html>