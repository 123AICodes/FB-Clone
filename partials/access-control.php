<?php
if (!isset($_SESSION['userID'])) {
	header('location: ' . ROOT_URL . 'cover.php');
	die();
} elseif (isset($_SESSION['userID'])) {

	$id = filter_var($_SESSION['userID'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$query = " SELECT * FROM Users WHERE id=$id";
	$results = mysqli_query($connection, $query);
	$user = mysqli_fetch_assoc($results);
}
