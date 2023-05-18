<?php
require_once "./config/database.php";

$body = $_SESSION['nPostData']['body'] ?? null;
unset($_SESSION['nPostData']);
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


<div style="margin-top: 3em;" class="settings-container lg">
	<div class="wrapper">
		<img src="<?= ROOT_URL ?>images/post/blog2.jpg">
	</div>
	<div class="wrapper lg">
		<div class="det-wrapper lg">
			<div class="top">
				<h5 class="chg">Your New Post Form</h5>
			</div>
			<div class="wrap-form">
				<form action="<?= ROOT_URL ?>logic/newPost-logic.php" class="form" autocapitalize="off" enctype="multipart/form-data" method="post">
					<div class="input-box">
						<span class="chg">Message</span>
						<textarea class="text-area" placeholder="Your Message" name="body"><?= $body ?></textarea>
						<input type="text" name="id" value="<?= $user['id'] ?>" hidden>
					</div>
					<div class="input-box">
						<span class="chg">Image</span>
						<input type="file" name="postImg">
					</div>
					<button class="sub-btn" name="post">New Post</button>
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
require_once "./partials/footer.php";
?>

<style>
	.settings-container.lg .wrapper.lg .text-area {
		width: 100%;
		padding: 1em 1.2em;
		height: 12em;
		border: 1.5px solid transparent;
		background: #eee;
		border-radius: 0.25em;
		resize: none;
	}

	.settings-container.lg .wrapper.lg .text-area:focus {
		border-color: hsl(209, 92%, 55%);
	}

	body.changeTheme .settings-container.lg .wrapper.lg .text-area {
		color: var(--white);
		background: hsl(210, 43%, 24%, 0.7);
	}
</style>