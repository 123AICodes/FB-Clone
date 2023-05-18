<div class="swiper-container posts-slider">
	<div class="swiper-wrapper wrapper">
		<div class="swiper-slide posts">
			<div class="img-post"><img style="height: 14em;" src="<?= ROOT_URL ?>thumbnails/<?= $user['profile'] ?>"></div>
			<div class="overlay col">
				<a href="<?= ROOT_URL ?>post.php" class="add-post"><span><i class="fa fa-plus"></i></span></a>
				<p>Post Story</p>
			</div>
		</div>
		<?php
		$sno = 0;
		$fetchStatus = mysqli_query($connection, " SELECT * FROM status ORDER BY id DESC");
		?>
		<?php while ($status = mysqli_fetch_assoc($fetchStatus)) : ?>
			<?php
			$userID = $status['userID'] ?? null;
			$fetchQuery = mysqli_query($connection, " SELECT * FROM Users WHERE id='$userID'");
			$fetchResults = mysqli_fetch_assoc($fetchQuery);
			?>
			<div class="swiper-slide posts">
				<div class="img-post"><img style="height:13em" src="<?= ROOT_URL ?>thumbnails/status/<?= $status['status'] ?>"></div>
				<div class="sm-round-img active"><img src="<?= ROOT_URL ?>thumbnails/<?= $fetchResults['profile'] ?>"></div>
				<div class="overlay">
					<p><?= $fetchResults['firstname'] . ' ' . $fetchResults['lastname'] ?></p>
				</div>
			</div>
		<?php
			$sno++;
		endwhile;
		?>
		<div class="swiper-slide posts">
			<div class="img-post"><img src="<?= ROOT_URL ?>images/status-3.png"></div>
			<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-2.png"></div>
			<div class="overlay">
				<p>Jnr Adams</p>
			</div>
		</div>
		<div class="swiper-slide posts">
			<div class="img-post"><img src="<?= ROOT_URL ?>images/status-4.png"></div>
			<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-3.png"></div>
			<div class="overlay">
				<p>Grace Samuelson</p>
			</div>
		</div>
		<div class="swiper-slide posts">
			<div class="img-post"><img src="<?= ROOT_URL ?>images/status-2.png"></div>
			<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-1.png"></div>
			<div class="overlay">
				<p>Jennifer</p>
			</div>
		</div>
		<div class="swiper-slide posts">
			<div class="img-post"><img src="<?= ROOT_URL ?>images/status-3.png"></div>
			<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-2.png"></div>
			<div class="overlay">
				<p>Jnr Adams</p>
			</div>
		</div>
		<div class="swiper-slide posts">
			<div class="img-post"><img src="<?= ROOT_URL ?>images/status-5.png"></div>
			<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-4.png"></div>
			<div class="overlay">
				<p>Phil Adams</p>
			</div>
			<div class="swiper-slide posts">
				<div class="img-post"><img src="<?= ROOT_URL ?>images/status-4.png"></div>
				<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-3.png"></div>
				<div class="overlay">
					<p>Grace Samuelson</p>
				</div>
			</div>
			<div class="swiper-slide posts">
				<div class="img-post"><img src="<?= ROOT_URL ?>images/status-5.png"></div>
				<div class="sm-round-img"><img src="<?= ROOT_URL ?>images/member-4.png"></div>
				<div class="overlay">
					<p>Phil Adams</p>
				</div>
			</div>
		</div>
	</div>
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>