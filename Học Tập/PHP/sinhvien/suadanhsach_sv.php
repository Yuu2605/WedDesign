<?php
 
require './xulytrangchuql.php';
 
// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_id_accounts($id);
}
 
// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: trangchu_qlsv.php");
}
 
// Nếu người dùng submit form
if (!empty($_POST['editacc']))
{
    // Lay data
    $data['username']    = isset($_POST['suaname']) ? $_POST['suaname'] : '';
    $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
     
    // Validate thong tin
    $errors = array();
    if (empty($data['username'])){
        $errors['username'] = 'Chưa nhập tên sinh vien';
    }
     
    // Neu ko co loi thi insert
    if (!$errors){
        edit_accounts($data['id'], $data['username']);
        // Trở về trang danh sách
        header("location: trangchu_qlsv.php");
    }
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thêm sinh viên </title>
</head>
<body>
<form method="POST" action="suadanhsach.php?id=<?php echo $data['id']; ?>">
    <table width="50%" border="1" cellspacing="0" cellspacing="10">
    <tr>
    <td>Name</td>
                    <td>
                        <input type="text" name="suaname" value="<?php echo $data['username']; ?>"/>
                        <?php if (!empty($errors['username'])) echo $errors['username']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                        <input type="submit" name="editacc" value="Lưu"/>
                   </td>
                 </tr>
    </table>
</form>
</body>
</html>