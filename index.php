    <?php
        require_once 'header.php';
        require_once 'backend/config.php';

        session_start();
        if(!isset($_SESSION['user_id'])) {
            $msg = "Je moet eerst inloggen!";
            header("Location: login/?msg=$msg");
            exit;
        }
        
        require_once 'backend/conn.php';
        $query = "SELECT * FROM movies";
        $statement = $conn->prepare($query);
        $statement->execute();
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        for (
            $i = rand(0, 5);
            $i < count($movielist); $i++) { ?>
        <section class="hero" style="background-image: url(<?php echo $base_url; ?>/style/img/<?php echo $movielist[$i]['banner']; ?>.jpg);">
            <div class="heroinformation">
                <img src="style/img/logos/<?php echo $movielist[$i]['banner']; ?>-logo.png" alt="<?php echo $movie['title']; ?> img banner">
                <p><?php echo $movielist[$i]['description']; ?></p>
                <a class="btn" href="movies.php?id=<?php echo $movielist[$i]['id']; ?>"><i class="heroicon fa-solid fa-play"></i> Play</a>
                <a class="btn" href="https://www.youtube.com/embed/<?php echo $movielist[$i]['trailer']; ?>"><i class="heroicon fa-solid fa-film"></i> Trailer</a>
            </div>
        </section>
    <?php break; }?>
</header>

<main>
    <div class="wrapper">
        <div class="rowstitel">
            <a href="populair.php"><h4>Most populair last 24/h</h4></a>
            <a href="populair.php">See full list <i class="fa-solid fa-angles-right"></i></a>
        </div>
        <div class="rows">
            <?php foreach(array_slice($movielist, 0, 6) as $movie ) {?>
                <div class="movie">
                    <?php $id = $movie['id'] ?>
                    <div class="container">
                        <a href="movies.php?id=<?php echo $id;?>"><img src="style/img/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"></a>
                        <div class="overlay">
                            <p><i class="fa-solid fa-star"></i></p>
                            <p><?php echo $movie['title']; ?></p>
                            <a href="https://www.youtube.com/watch?v=<?php echo $movie['trailer']; ?>"><i class="fa-solid fa-clapperboard"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="rowstitel">
            <a href="populair.php"><h4>Recommanded for you</h4></a>
            <a href="populair.php">See full list <i class="fa-solid fa-angles-right"></i></a>
        </div>
        <div class="rows">
            <?php foreach(array_slice($movielist, 0, 6) as $movie ) {?>
                <div class="movie">
                    <?php $id = $movie['id'] ?>
                    <div class="container">
                        <a href="movies.php?id=<?php echo $id;?>"><img src="style/img/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"></a>
                        <div class="overlay"><?php echo $movie['title']; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>