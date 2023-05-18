<?php
require_once "../config/database.php";

if (isset($_POST['status'])) {
	$userID = filter_var($_POST['userID'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$profile = $_FILES['profile'];

	if (empty($profile['name'])) {
		$_SESSION['status'] = "Please update status";
	} else {
		$time = time();
		$profileName = $time . $profile['name'];
		$profileTmpName = $profile['tmp_name'];
		$profileDestinationPath = "../thumbnails/status/" . $profileName;

		$allowedFiles = ['jpg', 'jpeg', 'png'];
		$extension = explode('.', $profileName);
		$extension = end($extension);

		if (in_array($extension, $allowedFiles)) {
			if ($profile['size'] > 1000000) {
				$_SESSION['status'] = "Sorry, file size is too big. MAX 4MB";
			} else {
				move_uploaded_file($profileTmpName, $profileDestinationPath);
			}
		} else {
			$_SESSION['status'] = "Sorry, file is not supported. (eg. jpg,png.jpeg)";
		}
	}

	if (isset($_SESSION['status'])) {
		header('location:' . ROOT_URL . 'status.php');
		die();
	} else {
		date_default_timezone_get();
		$date = date('M d, y, H:i A');
		$insertQuery = mysqli_query($connection, " INSERT INTO status(userID,status,dateTime)VALUES('$userID','$profileName','$date')");
		if (!mysqli_errno($connection)) {
			$_SESSION['statusSuccess'] = "Your status is updated successfully.";
			header('location:' . ROOT_URL . 'index.php');
			die();
		} else {
			die();
		}
	}
} else {
	header('location:' . ROOT_URL . 'status.php');
	die();
}
