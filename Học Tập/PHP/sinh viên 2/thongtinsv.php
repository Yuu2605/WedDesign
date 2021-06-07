<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Thông tin cá nhân sinh viên</title>
<head>
<body>
  <h1 align="center">Thông tin sinh viên</h1>
  <div style="margin-left: 200px">
  <form action="insertsv.php" method="POST">

  Mã sinh viên:<br /> 
  <input type="text" value="" name="masv" size="30" placeholder="Enter a valid id student"><br /><br />  
  Tên sinh viên:<br /> 
  <input type="text" value="" name="tensv" size="30" placeholder="Enter a valid name"><br /><br /> 
  Ngày sinh: 
  <br />
  <input type="text" name="ngaysinh" placeholder="vd:01/02/2021...">
  <br /><br /> 
  Lớp: <br />
    <input type="text" name="lop"   placeholder="Enter a valid class..."><br /><br /> 
 Điểm tổng kết:<br />
    <input type="text" value="" name="diemtongket"  
 placeholder="Enter a valid điểm.."><br /><br />
  <input type="submit" name="submisv" value="Lưu">
  <input type="reset" name="cancelsv" value="Cancel">

  </form>
  </div>
<body>
</html>