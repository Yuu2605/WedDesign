<?php
require "config/connect.php";
    $songId = $_GET['id'];

    $sql = "SELECT * FROM songs WHERE id=".$songId;
    $execute = $conn->query($sql);
    $result = $execute->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="process-edit.php" method="POST">
            <h4>Ten bai hat:</h4>
            <input type="text" name="name" value="<?= $result['name'] ?>"><br>
            <h4>Do dai:</h4>
            <input type="text" name="length" value="<?= $result['length'] ?>"><br>
            <h4>Album ID:</h4>
            <input type="number" name="album_id" value="<?= $result['album_id'] ?>"><br>
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <input type="submit" name="save" value="Save">
        </form>
    </main>
    <footer></footer>
</body>
</html>

