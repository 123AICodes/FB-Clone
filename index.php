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

<!-- --------------------------MAIN SITE-------------------------- -->
<main class="main-container">
	<?php
	require_once "./temp/__navbar.php";
	?>
	<!-- ---------MIDDLE--------- -->
	<div class="middle">
		<div class="top">
			<?php
			require_once "./temp/__carousel.php";
			?>
			<div class="bottom">
				<div class="user-post chg-bg">
					<div class="detail">
						<div class="img-sm-round"><img src="<?= ROOT_URL ?>thumbnails/<?= $user['profile'] ?>"></div>
						<div class="info">
							<h4 class="name"><?= $user['firstname'] . ' ' . $user['lastname'] ?></h4>
							<a class="chg">Public <span><i class="fa fa-caret-down"></i></span></a>
						</div>
					</div>
					<div class="bottom">
						<small class="chg">What's on your mind, <?= $user['firstname'] ?>?</small>
						<div class="wrp-frm">
							<form action="<?= ROOT_URL ?>logic/post-logic.php" method="post" class="form">
								<input type="text" name="post" class="box" id="post">
								<input hidden type="text" name="userID" value="<?= $user['id'] ?>">
								<button class="post-btn" name="postFeel">Post</button>
							</form>
						</div>
					</div>
					<div class="icons-wrapper">
						<a href="" class="flex">
							<div class="small-img"><img src="<?= ROOT_URL ?>images/icons/live-video.png"></div>
							<small class="pri">Live Video</small>
						</a>
						<a href="" class="flex">
							<div class="small-img"><img src="<?= ROOT_URL ?>images/icons/photo.png"></div>
							<small class="pri">Photo/Video</small>
						</a>
						<a href="" class="flex">
							<div class="small-img"><img src="<?= ROOT_URL ?>images/icons/feeling.png"></div>
							<small class="pri">Feeling/Activity</small>
						</a>
					</div>
				</div>

				<div class="single-post-container">

					<?php
					require_once "./temp/__feeling-post.php";
					require_once "./temp/__single-post.php";
					?>

					<?php if (mysqli_num_rows($fetchPost) > 8) : ?>
						<div class="load-more">
							<button class="load-btn">Load More</button>
						</div>
					<?php else : ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<!-- ---------RIGHT--------- -->
	<div class="right chg-bg">
		<div class="events-container">
			<div class="wrapper">
				<div class="top chg-bg">
					<div class="flx">
						<h4 class="name chg">Events</h4>
						<button class="see-all">See All</button>
					</div>
					<div class="cal-wrapper">
						<div class="cal">
							<h5 class="chg">18</h5>
							<small>June</small>
						</div>
						<div class="info">
							<h4 class="name">Social Media</h4>
							<div class="flex">
								<div>
									<div class="loc-img"><img src="<?= ROOT_URL ?>images/icons/location.png"></div>
									<small class="chg">Williams Tech Park</small>
								</div>
								<div>
									<a href="" class="more-info">More Info</a>
								</div>
							</div>
						</div>
					</div>
					<div class="cal-wrapper">
						<div class="cal">
							<h5 class="chg">22</h5>
							<small>March</small>
						</div>
						<div class="info">
							<h4 class="name">Social Media</h4>
							<div class="flex">
								<div>
									<div class="loc-img"><img src="<?= ROOT_URL ?>images/icons/location.png"></div>
									<small class="chg">Williams Tech Park</small>
								</div>
								<div><a href="" class="more-info">More Info</a></div>
							</div>
						</div>
					</div>
					<div class="cal-wrapper">
						<div class="cal">
							<h5 class="chg">24</h5>
							<small>July</small>
						</div>
						<div class="info">
							<h4 class="name">Social Media</h4>
							<div class="flex">
								<div>
									<div class="loc-img"><img src="<?= ROOT_URL ?>images/icons/location.png"></div>
									<small class="chg">Williams Tech Park</small>
								</div>
								<div>
									<a href="" class="more-info">More Info</a>
								</div>
							</div>
						</div>
					</div>
					<div class="cal-wrapper">
						<div class="cal">
							<h5 class="chg">25</h5>
							<small>August</small>
						</div>
						<div class="info">
							<h4 class="name">Social Media</h4>
							<div class="flex">
								<div>
									<div class="loc-img"><img src="<?= ROOT_URL ?>images/icons/location.png"></div>
									<small class="chg">Williams Tech Park</small>
								</div>
								<div><a href="" class="more-info">More Info</a></div>
							</div>
						</div>
					</div>
					<div class="cal-wrapper">
						<div class="cal">
							<h5 class="chg">25</h5>
							<small>March</small>
						</div>
						<div class="info">
							<h4 class="name">Social Media</h4>
							<div class="flex">
								<div>
									<div class="loc-img"><img src="<?= ROOT_URL ?>images/icons/location.png"></div>
									<small class="chg">Williams Tech Park</small>
								</div>
								<div><a href="" class="more-info">More Info</a></div>
							</div>
						</div>
					</div>
					<div class="cal-wrapper">
						<div class="cal">
							<h5 class="chg">29</h5>
							<small>April</small>
						</div>
						<div class="info">
							<h4 class="name">Social Media</h4>
							<div class="flex">
								<div>
									<div class="loc-img"><img src="<?= ROOT_URL ?>images/icons/location.png"></div>
									<small class="chg">Williams Tech Park</small>
								</div>
								<div><a href="" class="more-info">More Info</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="advertisement diff">
			<div class="flx">
				<h4 class="name chg">Advertisement</h4>
				<button class="see-all1">See All</button>
			</div>
			<div class="adv">
				<div class="ad">
					<div class="img-full"><img src="<?= ROOT_URL ?>images/advertisement.png"></div>
				</div>
				<div class="ad">
					<div class="img-full"><img src="<?= ROOT_URL ?>images/post/blog12.jpg"></div>
				</div>
				<div class="ad">
					<div class="img-full"><img src="<?= ROOT_URL ?>images/post/blog15.jpg"></div>
				</div>
			</div>
		</div>
		<div class="conversations">
			<div class="flx">
				<h4 class="name chg">Conversations</h4>
				<div>
					<button class="open">Open</button>
					<button class="open">Close</button>
				</div>
			</div>
			<div class="my-drop">
				<div class="con">
					<div class="user">
						<div class="img-sm-round"><img src="<?= ROOT_URL ?>images/avatar1.jpg"></div>
						<small class="act"></small>
					</div>
					<div class="info">
						<h4 class="name chg">Grace Adams</h4>
					</div>
				</div>
				<div class="con">
					<div class="user">
						<div class="img-sm-round"><img src="<?= ROOT_URL ?>images/member-2.png"></div>
						<small class="act"></small>
					</div>
					<div class="info">
						<h4 class="name chg">Stephen Duah</h4>
					</div>
				</div>
				<div class="con">
					<div class="user">
						<div class="img-sm-round"><img src="<?= ROOT_URL ?>images/avatar4.jpg"></div>
						<small class="act"></small>
					</div>
					<div class="info">
						<h4 class="name chg">Salima Suleman</h4>
					</div>
				</div>
				<div class="con">
					<div class="user">
						<div class="img-sm-round"><img src="<?= ROOT_URL ?>images/avatar3.jpg"></div>
						<small class="act"></small>
					</div>
					<div class="info">
						<h4 class="name chg">Collins Phill</h4>
					</div>
				</div>
			</div>
		</div>
</main>

<div class="toggle-container">
	<button class="toggle"><span><i class="fa fa-angle-left"></i></span></button>
	<button class="toggle"><span><i class="fa fa-angle-right"></i></span></button>
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