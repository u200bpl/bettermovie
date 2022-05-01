<?php
        require_once 'head.php';
        require_once 'header.php';
        require_once 'backend/config.php';
        
        // QUERY MOVIES
        $query = "SELECT * FROM movies ORDER BY RAND() LIMIT 250";
        $statement = $conn->prepare($query);
        $statement->execute();
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        // QUERY RECENTLY ADDED MOVIES
        $query2 = "SELECT * FROM movies ORDER BY id DESC";
        $statement2 = $conn->prepare($query2);
        $statement2->execute();
        $recentmovielist = $statement2->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach(array_slice($recentmovielist, 0) as $movie) { ?>
        <section class="hero" style="background-image: url(style/img/movies/<?php echo $movie['banner']; ?>.jpg);">
            <div class="heroinformation">
            <img src="style/img/logos/<?php echo $movie['banner']; ?>-logo.png" alt="<?php echo $movie['title']; ?> img banner">
                <p><?php echo $movie['description']; ?></p>
                <a class="btn" href="movie.php?id=<?php echo $movie['id']; ?>"><i class="heroicon fa-solid fa-video"></i> Play</a>
                <a class="btn" href="movieinfo.php?id=<?php echo $movie['id']; ?>"><i class="heroicon fa-solid fa-circle-info"></i> Information</a>
            </div>
        </section>
    <?php break; }?>
</header>

<main>
    <div class="wrapper">
        <div class="movies-list">
            <?php foreach(array_slice($movielist, 0, 250) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <div class="movie-container">
                    <div class="movies-list">
                        <a href="movieinfo.php?id=<?php echo $id;?>"><img src="style/img/movies/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"></a>
                        <div class="overlay">
                            <div class="sct-left">
                                <p><i class="fa-solid fa-star"></i></p>
                            </div>
                                        
                            <div class="sct-center">
                                <p><?php echo $movie['title']; ?></p>
                            </div>

                            <div class="sct-right">
                                <a href="https://www.youtube.com/watch?v=<?php echo $movie['trailer']; ?>"><i class="fa-solid fa-clapperboard"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>