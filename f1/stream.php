<?php
    require_once '../head.php';
    require_once '../backend/config.php';
?>
</header>

<main>
    <div class="movieoverlay">
        <a href="<?php echo $base_url; ?>/f1"><i class="test fa-solid fa-angles-left"></i> Go back</a>
    </div>

    <div>
        <div class="moviesection">
            <div><iframe src="//f1livegp.me/f1/live.php" allow="encrypted-media" width="100%" height="100%" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe></div>
        </div>
    </div>
</main>

<?php require_once '../footer.php' ?>