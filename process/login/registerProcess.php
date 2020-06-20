<?php
	include ("config.php");

	$username = $_POST['username'];
	$email = $_POST['email'];
	$role = $_POST['role'];
	$password = $_POST['password'];
	$password2 = $_POST['confirm_password'];
	$fullname = $_POST['fullname'];

	if ($password == $password2) {
		# code...
		$query = "INSERT INTO `user`(`username`, `email`, `role`, `password`, `fullname`) VALUES ('".$username."', '".$email."', '".$role."', '".$password."', '".$fullname."')";
		$sql = mysqli_query($mysqli, $query);
		if ($sql) {
			# code...
			header("location: ../../login.php");
		}
	}
?>