<?php
session_start();
require './xulytrangchuql.php';
$allaccounts = get_all_accounts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta Charset=UTF-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý sinh viên </title>
</head>
<body>
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username']) {
        echo "Bạn đã đăng nhập với tên là" .$_SESSION['username']."<br/>";
        echo 'click vào đây để <a href= "thoat.php"> Logout</a>';
    }
    else{
        echo'<a href="dn_qlsv.php">Trở về trang dăng nhập</a> ';
    }
    ?>
    <H1>Danh sách sinh viên trong database</h1>
    <br/> <br/>
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>idid</td>
            <td>tensv</td>
            <td>ngaysinh</td>
            <td>lop</td>
            <td>diemtongket</td>
            <td>tác vụ</td>
        </tr>
        <?php foreach ($allaccounts as $item) { ?>
        <tr>
            <td><?php echo $item["idid"]; ?></td>
            <td><?php echo $item["tensv"]; ?></td>
            <td><?php echo $item["ngaysinh"]; ?></td>
            <td><?php echo $item["lop"];?></td>
            <td><?php echo $item["diemtongket"];?></td>
            <td>
                <form method="post" action="xoa_dssv.php">
                    <input onclick="window.location ='suadanhsach_sv.php'?id=<?php echo $item['id']; ?> " type="button" name="edit" value="Sửa">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                    <input onclick="return confirm('Bạn có chắc muốn xoá không?');" type="submit" name="delete" value="xoá"/>
                </form>

            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
