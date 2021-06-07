<?php
session_start();
require './xulytrangchu.php';
$allaccounts = get_all_accounts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta Charset=UTF-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý accounts </title>
</head>
<body>
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username']) {
        echo "Bạn đã đăng nhập với tên là" .$_SESSION['username']."<br/>";
        echo 'click vào đây để <a href= "thoat.php"> Logout</a>';
    }
    else{
        echo'<a href="form_dn.php">Trở về trang dăng nhập</a> ';
    }
    ?>
    <H1>Danh sách accounts trong database</h1>
    <br/> <br/>
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>id</td>
            <td>username</td>
            <td>sex</td>
            <td>addres</td>
            <td>telephone</td>
            <td>email</td>
            <td>tác vụ</td>
        </tr>
        <?php foreach ($allaccounts as $item) { ?>
        <tr>
            <td><?php echo $item["id"]; ?></td>
            <td><?php echo $item["username"]; ?></td>
            <td><?php echo $item["sex"]; ?></td>
            <td><?php echo $item["address"];?></td>
            <td><?php echo $item["telephone"];?></td>
            <td><?php echo $item["email"]; ?></td>
            <td>
                <form method="post" action="xoa_ds.php">
                    <input onclick="window.location ='suadanhsach.php?id=<?php echo $item['id']; ?>' " type="button" name="edit" value="Sửa">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                    <input onclick="return confirm('Bạn có chắc muốn xoá không?');" type="submit" name="delete" value="xoá"/>
                </form>

            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
