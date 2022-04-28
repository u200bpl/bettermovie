<?php
    require_once '../backend/config.php';
	require_once '../head.php';
?>
</header>

<main>
	<div class="login">
		<form action="../backend/controllers/loginController.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Password" id="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</main>

<!-- <?php include 'layout/footer.php' ?> -->