<?php
        require_once '../head.php';
        require_once '../header.php';
        require_once '../backend/config.php';
        
        // QUERY F1 GRAND PRIXES
        // $query = "SELECT * FROM f1 ORDER BY 'order' DESC";
        $query = "SELECT * FROM f1 ORDER BY quantity + 0 ASC";
        $statement = $conn->prepare($query);
        $statement->execute();
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
</header>

<main>
    <div class="spacer"></div>
    <!-- 2021 -->
    <div class="wrapper">
        <div class="rowstitel">
            <h4>Grand Prix 2021</h4>
        </div>
    </div>

    <div class="movie-list">
        <button class="pre-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach($movielist as $movie) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['year'] == "2021") { ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="watch.php?id=<?php echo $id;?>"><img src="<?php echo $base_url; ?>/style/img/f1/<?php echo $movie['country']; ?>.jpg" alt="<?php echo $movie['country']; ?> img banner"></a>
                        <div class="overlay">                                        
                            <div class="sct-center">
                                <p>Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- 2020 -->
    <div class="wrapper">
        <div class="rowstitel">
            <h4>Grand Prix 2020</h4>
        </div>
    </div>

    <div class="movie-list">
        <button class="pre-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach($movielist as $movie) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['year'] == "2020") { ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="watch.php?id=<?php echo $id;?>"><img src="<?php echo $base_url; ?>/style/img/f1/<?php echo $movie['country']; ?>.jpg" alt="<?php echo $movie['country']; ?> img banner"></a>
                        <div class="overlay">                                        
                            <div class="sct-center">
                                <p>Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- 2019 -->
    <div class="wrapper">
        <div class="rowstitel">
            <h4>Grand Prix 2019</h4>
        </div>
    </div>

    <div class="movie-list">
        <button class="pre-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach($movielist as $movie) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['year'] == "2019") { ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="watch.php?id=<?php echo $id;?>"><img src="<?php echo $base_url; ?>/style/img/f1/<?php echo $movie['country']; ?>.jpg" alt="<?php echo $movie['country']; ?> img banner"></a>
                        <div class="overlay">                                        
                            <div class="sct-center">
                                <p>Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- 2018 -->
    <div class="wrapper">
        <div class="rowstitel">
            <h4>Grand Prix 2018</h4>
        </div>
    </div>

    <div class="movie-list">
        <button class="pre-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach($movielist as $movie) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['year'] == "2018") { ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="watch.php?id=<?php echo $id;?>"><img src="<?php echo $base_url; ?>/style/img/f1/<?php echo $movie['country']; ?>.jpg" alt="<?php echo $movie['country']; ?> img banner"></a>
                        <div class="overlay">                                        
                            <div class="sct-center">
                                <p>Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- 2017 -->
    <div class="wrapper">
        <div class="rowstitel">
            <h4>Grand Prix 2017</h4>
        </div>
    </div>

    <div class="movie-list">
        <button class="pre-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach($movielist as $movie) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['year'] == "2017") { ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="watch.php?id=<?php echo $id;?>"><img src="<?php echo $base_url; ?>/style/img/f1/<?php echo $movie['country']; ?>.jpg" alt="<?php echo $movie['country']; ?> img banner"></a>
                        <div class="overlay">                                        
                            <div class="sct-center">
                                <p>Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- 2016 -->
    <div class="wrapper">
        <div class="rowstitel">
            <h4>Grand Prix 2016</h4>
        </div>
    </div>

    <div class="movie-list">
        <button class="pre-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo $base_url; ?>/style/img/buttons/nxt.png" alt=""></button>
        <div class="card-container">
            <?php foreach($movielist as $movie) {?>
                <?php $id = $movie['id'] ?>
                <?php if ($movie['year'] == "2016") { ?>
                <div class="movie-container">
                    <div class="movie-list">
                        <a href="watch.php?id=<?php echo $id;?>"><img src="<?php echo $base_url; ?>/style/img/f1/<?php echo $movie['country']; ?>.jpg" alt="<?php echo $movie['country']; ?> img banner"></a>
                        <div class="overlay">                                        
                            <div class="sct-center">
                                <p>Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</main>

<?php require_once '../footer.php' ?>