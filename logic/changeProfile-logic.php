<?php
require_once "../config/database.php";

if (isset($_POST['changeProfile'])) {
	$userID = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$prevProfile = filter_var($_POST['prevProfile'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$profile = $_FILES['profile'];

	if (empty($profile['name'])) {
		$_SESSION['cProfile'] = "Please select your profile picture";
	} else {
		#working on profile
		if ($profile['name'] && $profile['size'] < 1000000) {
			#new profile
			$time = time();
			$profileName = $time . $profile['name'];
			$profileTmpName = $profile['tmp_name'];
			$profileDestinationPath = '../thumbnails/' . $profileName;
			#allowed files
			$allowedFiles = ['jpg', 'png', 'jpeg', 'webp'];
			$extension = explode('.', $profileName);
			$extension = end($extension);
			#checking files
			if (!in_array($extension, $allowedFiles)) {
				$_SESSION['cProfile'] = 'file extension is not supported. Supported Ext(eg. jpg, png, jpeg)';
			} else {
				$prevProfilePath = '../thumbnails/' . $prevProfile;
				if ($prevProfilePath) {
					unlink($prevProfilePath);
				}
				move_uploaded_file($profileTmpName, $profileDestinationPath);
			}
		} else {
			$_SESSION['cProfile'] = 'file size is too big. Max 1mb';
		}
	}
	if (isset($_SESSION['cProfile'])) {
		header('location:' . ROOT_URL . 'settings.php');
		die();
	} else {
		$insertProfile = $profileName ?? $prevProfile;
		$query = " UPDATE users SET profile='$insertProfile' WHERE id='$userID' LIMIT 1";
		$queryResults = mysqli_query($connection, $query);
		#checking connection
		if (!mysqli_errno($connection)) {
			$_SESSION['cProfileSuccess'] = 'Profile updated successfully';
			header('location:' . ROOT_URL . 'settings.php');
			die();
		} else {
			header('location:' . ROOT_URL . 'settings.php');
			die();
		}
	}
} else {
	header('location:' . ROOT_URL . 'settings.php');
	die();
}
