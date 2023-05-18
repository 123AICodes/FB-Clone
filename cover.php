<?php
require_once "./config/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/icon" href="<?= ROOT_URL ?>images/icons/logo.png">
	<title>SocialBook Clone</title>
	<!-- -------------------CSS FILES------------------- -->
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/all.min.css">
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">

</head>

<body style="background: hsl(210, 35%, 10%);;">

	<div class="cover-container">
		<div class="wrapper">
			<h4>Social<span>Book</span></h4>
			<small>Your Best Media Platform</small>
			<div class="flex">
				<a href="<?= ROOT_URL ?>auth/login.php">Login</a>
				<a href="<?= ROOT_URL ?>auth/signup.php">Sign Up</a>
			</div>
		</div>
	</div>


	<!-- ----------------------JS FILES---------------------- -->
	<script src="<?= ROOT_URL ?>js/all.min.js"></script>
	<script src="<?= ROOT_URL ?>js/swiper-bundle.min.js"></script>
	<script src="<?= ROOT_URL ?>js/script.js"></script>
</body>

</html>