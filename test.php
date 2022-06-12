    <?php
        require_once 'head.php';
        require_once 'header.php';
        require_once 'backend/config.php';
    ?>
</header>

<main>
    <div class="wrapper" style="color: white">
        <?php
            $arr = "https://api.gdriveplayer.us/v1/movie/newest";
        ?>

        <h1>TEST Title:</h1>
            <?php 
                if (is_array($values) || is_object($values)) {

                foreach ($values as $value) {
            ?>
                <div class="movie-container">
                    <div class="movie-list2">
                        <a href=""><img src="style/img/movies/<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?> img banner"></a>
                        <div class="overlay">
                            <div class="sct-left">
                                <p><i class="fa-solid fa-star"></i></p>
                            </div>
                                
                            <div class="sct-center">
                                <p><?php echo $movie['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
             }
            ?>
    </div>
</main>

<?php require_once 'footer.php' ?>