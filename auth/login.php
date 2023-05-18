<?php
require_once "../config/database.php";

$username = $_SESSION['loginData']['username'] ?? null;
$password = $_SESSION['loginData']['password'] ?? null;
unset($_SESSION['loginData']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/icon" href="<?= ROOT_URL ?>images/icons/logo.png">
	<title>SocialBook - Your Best Platform</title>

	<!-- -------------------CSS FILES------------------- -->
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/all.min.css">
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">

</head>

<body>

	<!-- ----------------------HEADER---------------------- -->
	<header class="header-container">
		<div class="container">
			<div class="wrapper">
				<div class="left">
					<a href="<?= ROOT_URL ?>index.php" class="logo"><img src="<?= ROOT_URL ?>images/logo.png"></a>
					<div class="wrap-icons">
						<a href=""><img src="<?= ROOT_URL ?>images/icons/notification.png"></a>
						<a href=""><img src="<?= ROOT_URL ?>images/icons/inbox.png"></a>
						<a href=""><img src="<?= ROOT_URL ?>images/icons/video.png"></a>
					</div>
				</div>
				<div class="right">
					<div class="wrap-search">
						<div class="wrap-form">
							<div class="frm">
								<form action="" class="form" autocomplete="off">
									<button><img src="<?= ROOT_URL ?>images/icons/search.png"></button>
									<input type="search" name="" class="input" placeholder="search...">
								</form>
							</div>
							<button class="search-md-btn"><span><img src="<?= ROOT_URL ?>images/icons/search.png"></span></button>
						</div>
						<div class="wrap-user">
							<button class="img-md-round userBtn"><span><img src="<?= ROOT_URL ?>images/icons/logo.png"></span></button>
							<div style="box-shadow:0px 0px 5px rgba(0,0,0,.5);" class="dropdown-container">
								<div class="top">
									<div class="left">
										<div class="img-sm-round"><img src="<?= ROOT_URL ?>images/icons/logo.png"></div>
										<div class="info">
											<h4 class="name">SocialBook</h4>
										</div>
									</div>
									<div class="right theme" id="themeBtn">
										<input type="checkbox" name="">
									</div>
								</div>
								<div class="top">
									<div class="left">
										<div class="img-sm-round"><img src="<?= ROOT_URL ?>images/icons/feedback.png"></div>
										<div class="info">
											<h4 class="name">Give feebacks</h4>
											<a href="">Help us to improve the new design</a>
										</div>
									</div>
								</div>
								<div class="top none">
									<div class="wrap-links">
										<a href="<?= ROOT_URL ?>settings.php" class="btn">
											<div class="img-sm-round small"><img src="<?= ROOT_URL ?>images/icons/setting.png"></div>
											<p>Settings</p>
										</a>
										<div class="img-ico"><img src="<?= ROOT_URL ?>images/icons/arrow.png"></div>
									</div>
									<div class="wrap-links">
										<a href="" class="btn">
											<div class="img-sm-round small"><img src="<?= ROOT_URL ?>images/icons/help.png"></div>
											<p>Help & Support</p>
										</a>
										<div class="img-ico"><img src="<?= ROOT_URL ?>images/icons/arrow.png"></div>
									</div>
									<div class="wrap-links">
										<a href="" class="btn">
											<div class="img-sm-round small"><img src="<?= ROOT_URL ?>images/icons/display.png"></div>
											<p>Display & Accessibility</p>
										</a>
										<div class="img-ico"><img src="<?= ROOT_URL ?>images/icons/arrow.png"></div>
									</div>
									<div class="wrap-links">
										<a href="<?= ROOT_URL ?>logout.php ?? 'John Doe'" class="btn">
											<div class="img-sm-round small"><img src="<?= ROOT_URL ?>images/icons/logout.png"></div>
											<p>Logout</p>
										</a>
										<div class="img-ico"><img src="<?= ROOT_URL ?>images/icons/arrow.png"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="humberger">
					<button class="menu-btn"><span><i class="fa fa-bars"></i></span></button>
					<button class="menu-btn"><span><i class="fa fa-close"></i></span></button>
				</div>
			</div>
		</div>
	</header>

	<?php
	/**-------------------------------------------------
	 * ERROR MESSAGE
 ---------------------------------------------------*/
	require_once "../temp/__error-message.php";
	?>


	<div style="margin-top: 3em;" class="settings-container lg">
		<div class="wrapper">
			<img src="<?= ROOT_URL ?>images/post/blog2.jpg">
		</div>
		<div class="wrapper lg">
			<div class="det-wrapper lg">
				<div class="top">
					<h5 class="chg">Please Login here</h5>
				</div>
				<div class="wrap-form">
					<form action="<?= ROOT_URL ?>auth/login-logic.php" method="post" class="form" autocapitalize="off">
						<div class="input-box">
							<span class="chg">Username</span>
							<input type="text" name="username" placeholder="John" value="<?= $username ?>">
						</div>
						<div class="input-box">
							<span class="chg">Password</span>
							<input type="password" name="password" placeholder="Adams" value="<?= $password ?>">
						</div>
						<p class="chg" style="margin-top: .5em;">don't have an account?
							<a href="signup.php" style="color:var(--primary)">Sign Up</a>
						</p>
						<button class="sub-btn" name="login">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="back-wrapper">
		<a href="#top" class="go-back"><span><i class="fa fa-arrow-right-long"></i></span></a>
	</div>

	<?php
	/**-------------------------------------------
	 * FOOTER
 --------------------------------------------*/
	require_once "../partials/footer.php";
	?>