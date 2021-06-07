<!-- Logic -->
<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['submit'])) :
    $files = $_FILES['upload'];
    $images = [];

    foreach ($files['error'] as $key => $value) :
        $fileName = $files['name'][$key];
        $fileTmpName = $files['tmp_name'][$key];
        $fileError = $files['error'][$key];

        $path = "public" . DIRECTORY_SEPARATOR . 'multi' . DIRECTORY_SEPARATOR;
        if (!is_dir($path)) :
            mkdir($path, 0777, true);
        endif;

        if ($fileError == UPLOAD_ERR_OK) :
            move_uploaded_file($fileTmpName, $path . '-camnh-' . $fileName);
            $images[] = $path . '-camnh-' . $fileName;
        endif;
    endforeach;
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form upload</h2>
    <!-- Encryption type -->
    <!-- 2 phần: Upload file lên server -->
    <!-- Xem ảnh mà đã được upload -->
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="upload[]" multiple />

        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- Hiển thị ảnh ra ngoài -->
    <?php if (isset($images)) :
            foreach ($images as $image) : 
    ?>
            <img src="<?php echo $image ?>" />
    <?php 
            endforeach;
        endif;
    ?>
</body>

</html>