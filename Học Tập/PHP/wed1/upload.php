<?php
 $MAX_FILE_SIZE = 1000000;
 //kiểm tra phương thức post
 if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "upload không thành công (not POST)";
    exit(-1);
 }
 if (!isset($_FILE["file_upload"]["error"]) || $_FILE["file_upload"]["error"] !=0) {
    echo "Upload không thành công (error loading)";
    exit(-1);
 //kiểm tra quá trình quá trình xử lý file khi upload
}
 if ( $_FILE["file_upload"]["size"] > $MAX_FILE_SIZE) {
    echo "Upload không thành công". $_FILE["file_upload"]["size"];
    exit(-1);
 }
 //kiểm tra kích thước dung lượng file upload

$temp = preg_split('/[\\\]', $_FILE["file_upload"]["name"]);
$filename = $temp[count($temp)-1];
if ( !preg_match('/\.(ipg/png/bmp)$/i', $filename)) {
    echo "Upload không thành công <br> ";
    echo "Vui lòng upload file hình ảnh <br>";
    exit(-1);
}
//kiểm tra loại file được upload lên sever
$upload_dir = "upload/";
$upload_file = $upload_dir . $filename;
if (move_uploaded_file($_FILE["file_name"]["tmp_name"], $upload_file)) {
    echo "tên file được upload:". $_FILE["file_upload"]["name"];
    echo "loại file được upload được upload:" .$_FILE["file_upload"]["type"];
    echo "Dung lượng file được upload:" .($_FILE["file_upload"]["size"]/1024)."kb<br/>;
    echo 'Upload không thành công(error sever)';
    ?>