<?php
#including database
require_once "../config/database.php";

#checking if login button is clicked
if (isset($_POST['login'])) {
	#declaring variables
	$username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	#validation
	if (empty($username)) {
		$_SESSION['login'] = "Please enter username or email";
		header('location: ' . ROOT_URL . 'auth/login.php');
	} elseif (empty($password)) {
		$_SESSION['login'] = "Password is required";
		header('location: ' . ROOT_URL . 'auth/login.php');
	} else {
		#checking if user exist
		$checkQuery = " SELECT * FROM Users WHERE username='$username' OR email='$username'";
		$checkResults = mysqli_query($connection, $checkQuery);
		if (mysqli_num_rows($checkResults) == 1) {
			#converting record into an assoc array if user is found
			$userRecord = mysqli_fetch_assoc($checkResults);
			$userPassword = $userRecord['password'];
			#comparing password
			if (password_verify($password, $userPassword)) {
				$_SESSION['userID'] = $userRecord['id'];
				header('location: ' . ROOT_URL . 'index.php');
			} else {
				$_SESSION['login'] = "Sorry! Password is incorrect";
			}
		} else {
			$_SESSION['login'] = "Please user not found";
		}
	}
	if (isset($_SESSION['login'])) {
		$_SESSION['loginData'] = $_POST;
		header('location:' . ROOT_URL . 'auth/login.php');
		die();
	}
}
