<?php
    require_once '../backend/config.php';
	require_once '../head.php';

    if(isset($_SESSION['user_id'])){
        header("location: ../../index.php");
    }
?>
</header>

<main>
	<div class="login">
		<form action="../backend/controllers/registerController.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>

            <label for="email">
                <i class="fa-solid fa-envelope"></i>
			</label>
			<input type="text" name="email" placeholder="E-mail" id="email" required>

			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Password" id="password" required>

			<input type="submit" value="Register">
		</form>
	</div>
</main>

<!-- <?php include 'layout/footer.php' ?> -->