    <?php
        require_once 'head.php';
        require_once 'header.php';
        require_once 'backend/config.php';

        session_start();
        if(!isset($_SESSION['user_id'])) {
            $msg = "Je moet eerst inloggen!";
            header("Location: subscriptions.php");
            exit;
        }
        
        // QUERY MOVIES
        $query = "SELECT * FROM movies";
        $statement = $conn->prepare($query);
        $statement->execute();
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        // QUERY RECENTLY ADDED MOVIES
        $query = "SELECT * FROM movies ORDER BY id DESC";
        $statement = $conn->prepare($query);
        $statement->execute();
        $recentmovielist = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        for (
            $i = rand(0, 5);
            $i < count($movielist); $i++) { ?>
        <section class="hero" style="background-image: url(style/img/movies/<?php echo $movielist[$i]['banner']; ?>.jpg);">
            <div class="heroinformation">
                <img src="style/img/logos/<?php echo $movielist[$i]['banner']; ?>-logo.png" alt="<?php echo $movie['title']; ?> img banner">
                <p><?php echo $movielist[$i]['description']; ?></p>
                <a class="btn" href="movie.php?id=<?php echo $movielist[$i]['id']; ?>"><i class="heroicon fa-solid fa-play"></i> Play</a>
                <a class="btn" href="https://www.youtube.com/embed/<?php echo $movielist[$i]['trailer']; ?>"><i class="heroicon fa-solid fa-film"></i> Trailer</a>
            </div>
        </section>
    <?php break; }?>
</header>

<main>
    <!-- 
        RECENTLTY ADDED
    -->
    <div class="wrapper">
        <div class="rowstitel">
            <a href="populair.php"><h4>Recently Added</h4>
            <p>See full list <i class="fa-solid fa-angles-right"></i></p></a>
        </div>
    </div>
    <div class="movie-list">
        <button class="pre-btn"><img src="style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach(array_slice($recentmovielist, 0, 6) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="movie.php?id=<?php echo $id;?>"><img src="style/img/movies/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"></a>
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
    

    <!-- 
        RECOMMeNDED
    -->
    <div class="wrapper">
        <div class="rowstitel">
            <a href="populair.php"><h4>Recommended for you</h4>
            <p>See full list <i class="fa-solid fa-angles-right"></i></p></a>
        </div>
    </div>
    <div class="movie-list">
        <button class="pre-btn"><img src="style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container" id="normalmovielist">
            <?php foreach(array_slice($movielist, 0, 6) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="movie.php?id=<?php echo $id;?>"><img src="style/img/movies/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"></a>
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