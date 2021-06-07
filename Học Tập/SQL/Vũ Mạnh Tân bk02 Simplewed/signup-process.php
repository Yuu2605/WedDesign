<?php
require 'config/connect.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$name = $_POST['username'];
	$pw = $_POST['password'];
	echo  $name ." - ". $email ." - ".$pw;
	$sql = "SELECT * FROM users WHERE email = '".$email."'AND name = '".$username."' AND password = '".$pw."' ";
	$queryExe = $conn->query($sql);
	// lay ve array
	$result = $queryExe->fetch_assoc();
	// neu tim thay ket qua
	if (count($result)) {
		echo "<script>alert('signup Success')</script>";
	}else{
		throw new Exception("Wrong password or email!");
	}
}