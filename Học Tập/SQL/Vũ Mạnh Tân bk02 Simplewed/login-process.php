<?php
require 'config/connect.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];	
	$password = $_POST['password'];
	echo $email ." - ".$password;

	// chuan bi query
	$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
	// query trong bang
	$queryExe = $conn->query($sql);
	// lay ve array
	$result = $queryExe->fetch_assoc();
	// neu tim thay ket qua
	if (count($result)) {
		echo "<script>alert('Login Success')</script>";
	}else{
		throw new Exception("Wrong password or email!");
	}
}