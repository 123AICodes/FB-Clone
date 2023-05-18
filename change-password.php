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
		<img src="./images/post/blog2.jpg">
	</div>
	<div class="wrapper">
		<div class="flex">
			<div class="profile-wrapper">
				<div class="wrap-form">
					<form action="" class="form" autocapitalize="off">
						<input type="text" placeholder="1123***">
						<input hidden type="text" name="id" value="<?= $user['id'] ?>">
						<button class="sub-btn">Change Password</button>
					</form>
				</div>
			</div>
			<div class="det-wrapper">
				<div class="top">
					<h5 class="chg">User Settings</h5>
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