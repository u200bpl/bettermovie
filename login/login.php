	<?php
		require_once 'layout/head.php';
	?>
</header>

<main>
	<div class="login">
		<form action="./backend/controllers/loginController.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Password" id="password" required>
			<div class="error">
				<?php
				if(isset($_SESSION["msg"])) {
					$msg = $_SESSION["msg"];
				}
				?>
				<p><span>ERROR: </span> <?php echo $msg ?></p>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</main>

<!-- <?php include './layout/footer.php' ?> -->