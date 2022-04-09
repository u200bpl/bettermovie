    <?php include 'layout/header.php' ?>

    <?php
        require_once './backend/conn.php';
        $query = "SELECT * FROM movies";
        $statement = $conn->prepare($query);
        $statement->execute();
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <?php for ($nmr = 1, $i = $nmr; $i < count($movielist); $i++) { ?>
        <section class="hero" style="background-image: url(./style/img/<?php echo $movielist[$i]['banner']; ?>.jpg);">
            <div class="heroinformation">
                <img src="style/img/logos/<?php echo $movielist[$i]['banner']; ?>-logo.png" alt="<?php echo $movie['title']; ?> img banner">
                <p><?php echo $movielist[$i]['description']; ?></p>
                <a class="btn" href="movies.php?id=<?php echo $movielist[$i]['id']; ?>"><i class="heroicon fa-solid fa-play"></i> Play</a>
                <a class="btn" href="https://www.youtube.com/embed/<?php echo $movielist[$i]['trailer']; ?>"><i class="heroicon fa-solid fa-film"></i> Trailer</a>
            </div>
        </section>
    <?php if ($i = $nmr + 1) break; }?>
</header>

<main>
    <div class="wrapper">
        <div class="rows">               
            <?php foreach(array_slice($movielist, 0, 4) as $movie ) {?>
                <div class="movie">
                    <?php $id = $movie['id'] ?>
                    <a href="movies.php?id=<?php echo $id;?>"><img src="style/img/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"></a>
                    <a href="movies.php?id=<?php echo $id;?>"><p><?php echo $movie['title']; ?></p></a>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php include 'layout/footer.php' ?>