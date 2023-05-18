	<!-- -----------------SIGNUP----------------- -->
	<?php if (isset($_SESSION['signup'])) : ?>
		<div class="empty error">
			<p>
				<?php
				echo $_SESSION['signup'];
				unset($_SESSION['signup']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php elseif (isset($_SESSION['signupSuccess'])) : ?>
		<div class="empty success">
			<p>
				<?php
				echo $_SESSION['signupSuccess'];
				unset($_SESSION['signupSuccess']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
		<!-- -----------------LOGIN----------------- -->
	<?php elseif (isset($_SESSION['login'])) : ?>
		<div class="empty error">
			<p>
				<?php
				echo $_SESSION['login'];
				unset($_SESSION['login']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php elseif (isset($_SESSION['loginSuccess'])) : ?>
		<div class="empty success">
			<p>
				<?php
				echo $_SESSION['loginSuccess'];
				unset($_SESSION['loginSuccess']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
		<!-- -----------------POST----------------- -->
	<?php elseif (isset($_SESSION['post'])) : ?>
		<div class="empty error">
			<p>
				<?php
				echo $_SESSION['post'];
				unset($_SESSION['post']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php elseif (isset($_SESSION['postSuccess'])) : ?>
		<div class="empty success">
			<p>
				<?php
				echo $_SESSION['postSuccess'];
				unset($_SESSION['postSuccess']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
		<!-- -----------------STATUS----------------- -->
	<?php elseif (isset($_SESSION['status'])) : ?>
		<div class="empty error">
			<p>
				<?php
				echo $_SESSION['status'];
				unset($_SESSION['status']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php elseif (isset($_SESSION['statusSuccess'])) : ?>
		<div class="empty success">
			<p>
				<?php
				echo $_SESSION['statusSuccess'];
				unset($_SESSION['statusSuccess']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
		<!-- -----------------CHANGE----------------- -->
	<?php elseif (isset($_SESSION['cProfile'])) : ?>
		<div class="empty error">
			<p>
				<?php
				echo $_SESSION['cProfile'];
				unset($_SESSION['cProfile']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php elseif (isset($_SESSION['cProfileSuccess'])) : ?>
		<div class="empty success">
			<p>
				<?php
				echo $_SESSION['cProfileSuccess'];
				unset($_SESSION['cProfileSuccess']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
		<!-- -----------------NEW POST----------------- -->
	<?php elseif (isset($_SESSION['nPost'])) : ?>
		<div class="empty error">
			<p>
				<?php
				echo $_SESSION['nPost'];
				unset($_SESSION['nPost']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php elseif (isset($_SESSION['nPostSuccess'])) : ?>
		<div class="empty success">
			<p>
				<?php
				echo $_SESSION['nPostSuccess'];
				unset($_SESSION['nPostSuccess']);
				?>
			</p>
			<button onclick="this.parentElement.remove()"><span><i class="fa fa-close"></i></span></button>
		</div>
	<?php endif ?>