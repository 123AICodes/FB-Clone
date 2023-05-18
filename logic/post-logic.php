<?php
require_once "../config/database.php";

if (isset($_POST['postFeel'])) {
	$post = filter_var($_POST['post'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$userID = filter_var($_POST['userID'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	if (empty($post)) {
		$_SESSION['post'] = "Please tell us what you're feeling today!";
		header('location:' . ROOT_URL . 'index.php');
		die();
	} else {
		date_default_timezone_set('Africa/Accra');
		$date = date('M d, y, H:i A');
		$insertQuery = " INSERT INTO post(userID,text,dateTime)VALUES('$userID','$post','$date')";
		$insertResults = mysqli_query($connection, $insertQuery);

		$_SESSION['postSuccess'] = "New post added successfully";
		header('location:' . ROOT_URL . 'index.php');
		die();
	}
} else {
	header('location:' . ROOT_URL . 'index.php');
	die();
}
