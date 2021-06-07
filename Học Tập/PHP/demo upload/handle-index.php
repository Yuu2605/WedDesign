<?php
session_start();
//đặt giờ hiện tại là Thành phố HCM
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['submit'])) :
    $file = $_FILES['upload'];
    // File: Mảng
    $fileName = time() . $file['name'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    // lấy phần mở rộng của ảnh
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // 8-1945.jpg => jpg
    //Kiểm tra ảnh thuộc jpg,jpeg,png,gif
    $allowableExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExtension, $allowableExtensions)) :
        //ảnh được dùng để hiển thị ra ngoài
        $img = "";
        //Upload ảnh cần đường dẫn
        $path = "public" . DIRECTORY_SEPARATOR;
        //Nếu trong trường hợp đường dẫn không tồn tại ==> thêm thư mục mới
        //Kiểm tra xem path có tồn tại không, nếu không có thì
        //tạo đường dẫn mới cho file, cho phép file được upload
        //ở trong thư mục con của thư mục được chỉ định
        if (!is_dir($path)) :
            mkdir($path, 0777, true);
        endif;

        //kiểm tra trạng thái: Nếu không có lỗi
        //copy file từ ngoài vào trong thư mục vừa tạo
        if ($file['error'] == UPLOAD_ERR_OK) :
            move_uploaded_file($fileTmpName, $path . $fileName);
            $img = $path . $fileName;
            $_SESSION['images'] = $img;
            header('location:index.php');
        endif;
    else :
        echo "Sai định dạng ảnh";
    endif;
endif;
