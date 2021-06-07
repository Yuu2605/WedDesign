<?php
session_start();
if (isset($_SESSION['username'])){
    unset($_SESSION['username']);
}
?>
<a href="trangchu_qlsv.php"> HOME</a>