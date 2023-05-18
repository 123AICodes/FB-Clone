<?php
$sno = 0;
$fetchPost = mysqli_query($connection, "SELECT * FROM post ORDER BY id DESC LIMIT 4");
?>
<?php while ($postResults = mysqli_fetch_assoc($fetchPost)) : ?>
	<?php
	$userID = $postResults['userID'] ?? null;
	$fetchQuery = mysqli_query($connection, " SELECT * FROM Users WHERE id='$userID'");
	$fetchResults = mysqli_fetch_assoc($fetchQuery);
	?>
	<div class="single-post chg-bg">
		<div class="detail">
			<div class="img-sm-round"><img src="<?= ROOT_URL ?>thumbnails/<?= $fetchResults['profile'] ?>"></div>
			<div class="info">
				<div class="inf">
					<h4 class="name"><?= $fetchResults['firstname'] . ' ' . $fetchResults['lastname'] ?></h4>
					<a class="chg"><?= $postResults['dateTime'] ?></a>
				</div>
				<div class="ell-wrap" style="position: relative;">
					<button onclick="toggleDropdown(this)" class="ell" id="fEllBTN"><span><i class="fa fa-ellipsis-v"></i></span></button>
					<div class="ell-dropdown" id="fDropdown">
						<a href="<?= ROOT_URL ?>edit/edit-post.php?edit_post_idNumber=<?= $postResults['id'] ?>" class="ell-link">
							<span><i class="fa fa-edit"></i></span>&nbsp;
							<small>Edit</small>
						</a>
						<a href="<?= ROOT_URL ?>logic/delete-post-logic.php?delete_post_idNumber=<?= $postResults['id'] ?>" class="ell-link">
							<span><i class="fa fa-trash"></i></span>&nbsp;
							<small>Delete</small>
						</a>
						<a href="<?= ROOT_URL ?>view/view-post.php?view_post_idNumber=<?= $postResults['id'] ?>" class="ell-link">
							<span><i class="fa fa-eye"></i></span>&nbsp;
							<small>View</small>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="message">
			<p class="chg">
				<?= $postResults['text'] ?>. <a href="">#ai coding lab</a>
			</p>
		</div>
		<div class="wrap-ico">
			<div class="flex">
				<div>
					<button><span><img src="<?= ROOT_URL ?>images/icons/like.png"></span></button>
					<small class="chg">200</small>
				</div>
				<div>
					<button class="dislike"><span><img src="<?= ROOT_URL ?>images/icons/like.png"></span></button>
					<small class="chg">12</small>
				</div>
				<div>
					<button><span><img src="<?= ROOT_URL ?>images/icons/comments.png"></span></button>
					<small class="chg">45</small>
				</div>
				<div>
					<button><span><img src="<?= ROOT_URL ?>images/icons/share.png"></span></button>
					<small class="chg">20</small>
				</div>
			</div>
			<div class="semi-img">
				<div class="img-sml-round"><img src="<?= ROOT_URL ?>thumbnails/<?= $fetchResults['profile'] ?>"></div>
			</div>
		</div>
	</div>
<?php
	$sno++;
endwhile;
?>
<script>
	function toggleDropdown(button) {
		var dropdowns = document.querySelectorAll(".ell-dropdown");

		dropdowns.forEach(function(dropdown) {
			if (dropdown.contains(button)) {
				dropdown.classList.toggle("active");
			} else {
				dropdown.classList.remove("active");
			}
		});
	}
</script>