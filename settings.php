<?php
require_once "./config/database.php";
?>

<?php
/**-------------------------------------------------
 * HEADER
 ---------------------------------------------------*/
require_once "./partials/header.php";

/**-------------------------------------------------
 * ERROR MESSAGE
 ---------------------------------------------------*/
require_once "./temp/__error-message.php";
?>

<div style="margin-top: 3em;" class="settings-container">
	<div class="wrapper">
		<img src="<?= ROOT_URL ?>images/post/blog2.jpg">
	</div>
	<div class="wrapper">
		<div class="flex">
			<div class="profile-wrapper">
				<div class="wrap-pf-img">
					<div class="pf-img"><img src="<?= ROOT_URL ?>thumbnails/<?= $user['profile'] ?>"></div>
				</div>
				<div class="wrap-form">
					<form action="<?= ROOT_URL ?>logic/changeProfile-logic.php" method="post" class="form" autocapitalize="off" enctype="multipart/form-data">
						<input type="file" name="profile">
						<input hidden type="text" name="prevProfile" value="<?= $user['profile'] ?>">
						<input hidden type="text" name="id" value="<?= $user['id'] ?>">
						<button class="sub-btn" name="changeProfile">Change Profile</button>
					</form>
				</div>
			</div>
			<div class="det-wrapper">
				<div class="top">
					<h5 class="chg">User Settings</h5>
					<a href="<?= ROOT_URL ?>change-password.php">
						<button><span><i class="fa fa-lock"></i></span></button>
						<p>Change Password</p>
					</a>
				</div>
				<div class="wrap-form">
					<form action="" class="form" autocapitalize="off">
						<div class="input-box">
							<span class="chg">Firstname</span>
							<input type="text" placeholder="<?= $user['firstname'] ?>">
						</div>
						<div class="input-box">
							<span class="chg">Lastname</span>
							<input type="text" placeholder="<?= $user['lastname'] ?>">
						</div>
						<div class="input-box">
							<span class="chg">Username</span>
							<input type="text" placeholder="<?= $user['username'] ?>">
						</div>
						<div class="input-box">
							<span class="chg">Email</span>
							<input type="text" placeholder="<?= $user['email'] ?>">
						</div>
						<input hidden type="text" name="id" value="<?= $user['id'] ?>">
						<button class="sub-btn" name="saveSettings">Save Settings</button>
					</form>
				</div>
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
require_once "./partials/footer.php";
?>