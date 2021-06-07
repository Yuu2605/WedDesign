<?php
require "config/connect.php";

$sql = "SELECT * FROM songs WHERE status = 1";
$execute = $conn->query($sql);
$result = $execute->fetch_all(MYSQLI_ASSOC);
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
    <table cellpadding="0" cellspacing="0" border="1px red">
        <?php if (count($result) > 0): ?>
            <?php foreach ($result as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['length'] ?></td>
                    <td><?= $row['album_id'] ?></td>
                    <td>
                        <button><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></button>
                    </td>
                    <td>
                        <button><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td>Khong co du lieu</td>
            </tr>
        <?php endif; ?>
    </table>
</main>
<footer></footer>
</body>
</html>
