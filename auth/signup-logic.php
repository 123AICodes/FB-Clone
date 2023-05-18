<?php
require_once "../config/database.php";

if (isset($_POST['signup'])) {

	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$profile = $_FILES['profile'];

	/**----------------------------------------------------
	 * VALIDATIONS
	 -----------------------------------------------------*/
	if (empty($firstname)) {
		$_SESSION['signup'] = "Please provide firstname";
	} elseif (empty($lastname)) {
		$_SESSION['signup'] = "Please enter lastname";
	} elseif (empty($username)) {
		$_SESSION['signup'] = "Please enter username";
	} elseif (empty($email)) {
		$_SESSION['signup'] = "Please enter email";
	} elseif (empty($password)) {
		$_SESSION['signup'] = "Please enter password";
	} elseif (empty($cpassword)) {
		$_SESSION['signup'] = "Please confirm password";
	} elseif (empty($profile['name'])) {
		$_SESSION['signup'] = "Please select your profile picture";
	} else {
		/**----------------------------------------------------
		 * PWD VALIDATION
	-----------------------------------------------------*/
		if ($password != $cpassword) {
			$_SESSION['signup'] = "Please your passwords do not match!";
		} else {
			/**----------------------------------------------------
			 * ENCRYPT PWD
			-----------------------------------------------------*/
			$hashPassword = password_hash($password, PASSWORD_DEFAULT);
			/**----------------------------------------------------
			 * VERIFY CREDENTIALS IF TAKEN
			-----------------------------------------------------*/
			$verifyQuery = mysqli_query($connection, "SELECT * FROM Users WHERE username='$username' OR email='$email'");
			$verifyResults = mysqli_num_rows($verifyQuery);
			if ($verifyResults > 0) {
				$_SESSION['signup'] = "Username or Email is already taken";
			} else {
				/**----------------------------------------------------
				 * WORKING ON PROFILE
				-----------------------------------------------------*/
				$time = time();
				$profileName = $time . $profile['name'];
				$profileTmpName = $profile['tmp_name'];
				$profileDestinationPath = "../thumbnails/" . $profileName;
				/**----------------------------------------------------
				 * ALLOWED EXTENSIONS
				-----------------------------------------------------*/
				$allowedFiles = ['jpg', 'jpeg', 'png'];
				$extension = explode('.', $profileName);
				$extension = end($extension);
				/**----------------------------------------------------
				 * VERIFY EXTENSIONS IF SELECTED
				-----------------------------------------------------*/
				if (in_array($extension, $allowedFiles)) {
					/**----------------------------------------------------
					 * VERIFY FILE SIZE
					-----------------------------------------------------*/
					if ($profile['size'] > 1000000) {
						$_SESSION['signup'] = "Sorry, file size is too big. MAX 4MB";
					} else {
						move_uploaded_file($profileTmpName, $profileDestinationPath);
					}
				} else {
					$_SESSION['signup'] = "Sorry, file is not supported. (eg. jpg,png.jpeg)";
				}
			}
		}
	}
	/**----------------------------------------------------
	 * REDIRECTION
	-----------------------------------------------------*/
	if (isset($_SESSION['signup'])) {
		$_SESSION['signupData'] = $_POST;
		header('location:' . ROOT_URL . 'auth/signup.php');
		die();
	} else {
		/**----------------------------------------------------
		 * ADD USER
		-----------------------------------------------------*/
		$insertQuery = " INSERT INTO Users(firstname,lastname,username,email,password,profile)
									 VALUES('$firstname','$lastname','$username','$email','$hashPassword','$profileName')";
		$insertResults = mysqli_query($connection, $insertQuery);
		/**----------------------------------------------------
		 * CHECK CONNECTION
		-----------------------------------------------------*/
		if (!mysqli_errno($connection)) {
			$_SESSION['signupSuccess'] = "Account created successfully";
			header('location:' . ROOT_URL . 'auth/signup.php');
			die();
		} else {
			header('location:' . ROOT_URL . 'auth/signup.php');
			die();
		}
	}
} else {
	header('location:' . ROOT_URL . 'auth/signup.php');
	die();
}
