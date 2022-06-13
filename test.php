    <?php
        require_once 'head.php';
        require_once 'header.php';
        require_once 'backend/config.php';

        $status = json_decode(file_get_contents('https://api.gdriveplayer.us/v1/movie/newest'), true);
    ?>
</header>

<main>
    <div class="spacer"></div>
        <div class="wrapper">
            <div class="rowstitel">
                <h4>Recently Added</h4>
            </div>
        </div>

        <div class="movie-list">
            <button class="pre-btn"><img src="style/img/buttons/pre.png" alt=""></button>
            <button class="nxt-btn"><img src="style/img/buttons/nxt.png" alt=""></button>
            <div class="card-container">
                <?php foreach ($status as $movie) {?>
                    <div class="movie-container">
                        <div class="movies-test">
                            <a href=""><img src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?> img banner"></a>
                            <div class="overlay">                                    
                                <div class="sct-center">
                                    <p><?php echo $movie['title']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</main>

<?php require_once 'footer.php' ?>