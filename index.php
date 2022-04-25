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
            <?php foreach(array_slice($recentmovielist, 0, 15) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <!-- <div class="quality"><p><?php echo $movie['quality']; ?></p></div> -->
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
                                <a href="movieinfo.php?id=<?php echo $movie['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    

    <!-- 
        RECOMMENDED
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
            <?php foreach(array_slice($movielist, 0, 15) as $movie ) {?>
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
                                <a href="movieinfo.php?id=<?php echo $movie['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- 
        COMEDY
    -->
    <div class="wrapper">
        <div class="rowstitel">
            <a href="populair.php"><h4>Comedy Movies</h4>
            <p>See full list <i class="fa-solid fa-angles-right"></i></p></a>
        </div>
    </div>
    <div class="movie-list">
        <button class="pre-btn"><img src="style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach(array_slice($movielist, 0, 15) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['genre'] == "comedy") { ?>
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
                                <a href="movieinfo.php?id=<?php echo $movie['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    

    <!-- 
        ACTION
    -->
    <div class="wrapper">
        <div class="rowstitel">
            <a href="populair.php"><h4>Action Movies</h4>
            <p>See full list <i class="fa-solid fa-angles-right"></i></p></a>
        </div>
    </div>
    <div class="movie-list">
        <button class="pre-btn"><img src="style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container" id="normalmovielist">
            <?php foreach(array_slice($movielist, 0, 15) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['genre'] == "action") { ?>
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
                                <a href="movieinfo.php?id=<?php echo $movie['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- 
        HORROR
    -->
    <div class="wrapper">
        <div class="rowstitel">
            <a href="populair.php"><h4>Horror Movies</h4>
            <p>See full list <i class="fa-solid fa-angles-right"></i></p></a>
        </div>
    </div>
    <div class="movie-list">
        <button class="pre-btn"><img src="style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach(array_slice($movielist, 0, 15) as $movie ) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['genre'] == "horror") { ?>
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
                                <a href="movieinfo.php?id=<?php echo $movie['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>