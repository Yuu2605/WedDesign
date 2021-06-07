<?php

require "config/connect.php";

if (isset($_GET['id'])) {
    $sondID = $_GET['id'];

    $sql = "UPDATE songs SET status = 0 WHERE id = ".$sondID;
    $result = $conn->query($sql);
    if ($result) {
        header('Location: index.php');
    }
}