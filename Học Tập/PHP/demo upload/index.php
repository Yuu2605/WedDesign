<?php
require('./handle-index.php')
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
    <form method="POST" enctype="multipart/form-data" action="handle-index.php">
        <input type="file" name="upload" />

        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- Hiển thị ảnh ra ngoài, nếu ảnh có tồn tại -->
    <?php if (isset($img)) : ?>
        <img src="<?php echo $img ?>" />
    <?php endif; ?>
</body>

</html>