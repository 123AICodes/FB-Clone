<?php
require_once "../config/database.php";

if (isset($_POST['post'])) {
	$userID = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$thumbnail = $_FILES['postImg'];

	if (empty($body)) {
		$_SESSION['nPost'] = "Please provide your post message";
	} elseif (empty($thumbnail['name'])) {
		$_SESSION['nPost'] = "Please select your post thumbnail";
	} else {
		$time = time();
		$thumbnailName = $time . $thumbnail['name'];
		$thumbnailTmpName = $thumbnail['tmp_name'];
		$thumbnailDestinationPath = "../thumbnails/posts/" . $thumbnailName;

		$allowedFiles = ['jpg', 'png', 'jpeg'];
		$extension = explode('.', $thumbnailName);
		$extension = end($extension);

		if (!in_array($extension, $allowedFiles)) {
			$_SESSION['nPost'] = "File not supported. Supported - JPG | PNG | JPEG";
		} else {
			if ($thumbnail['size'] > 1000000) {
				$_SESSION['nPost'] = "File size is too big. MAX 4MB";
			} else {
				move_uploaded_file($thumbnailTmpName, $thumbnailDestinationPath);
			}
		}
	}

	if (isset($_SESSION['nPost'])) {
		$_SESSION['nPostData'] = $_POST;
		header('location:' . ROOT_URL . 'post.php');
		die();
	} else {
		date_default_timezone_set('Africa/Accra');
		$date = date('M d y, H:i A');
		$insertQuery = mysqli_query($connection, "INSERT INTO newpost(userID,text,thumbnail,dateTime)VALUES('$userID','$body','$thumbnailName','$date')");
		if (!mysqli_errno($connection)) {
			$_SESSION['nPostSuccess'] = "New post added successfully";
			header('location:' . ROOT_URL . 'index.php');
			die();
		} else {
			die(mysqli_errno($connection));
		}
	}
} else {
	header('location:' . ROOT_URL . 'post.php');
	die();
}
