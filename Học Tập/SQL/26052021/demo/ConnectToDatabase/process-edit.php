<?php
require "config/connect.php";

if (isset($_POST['save'])){
    $sondID = $_POST['id'];
    $songName = $_POST['name'];
    $songLength = $_POST['length'];
    $albumID = $_POST['album_id'];

    $sql = "UPDATE songs SET name = '".$songName."', length = '".$songLength."', album_id = ".$albumID." WHERE id = ".$sondID;
    $result = $conn->query($sql);
    if ($result) {
        header('Location: index.php');
    }
}