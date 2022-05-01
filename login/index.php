<?php
    require_once '../backend/config.php';
	require_once '../header.php';
	require_once '../head.php';

	if(isset($_SESSION['user_id'])){
        header("location: ../index.php");
    }
?>
</header>

<main>
	<div class="login">
		<form action="../backend/controllers/loginController.php" method="post">
			<label for="username"><i class="fas fa-user"></i></label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			
			<label for="password"><i class="fas fa-lock"></i></label>
			<input type="password" name="password" placeholder="Password" id="password" required>
			
			<?PHP if(isset($_GET['msg'])) {
	            echo "<div class='error'><span>ERROR: </span>" .$_GET['msg']. "</div>";
			} ?>
			
			<input type="submit" value="Login">
		</form>

		<div class="already">
			<p>Wanna make a account? <a href="../register/">Register here</a></p>
		</div>
	</div>
</main>

<?php require_once '../footer.php'; ?>