    <?php include 'layout/header.php' ?>

    <?php
        require_once './backend/conn.php';
        $query = "SELECT * FROM movies";
        $statement = $conn->prepare($query);
        $statement->execute();
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <section class="hero" style="background-image: url(./style/img/<?php echo $movielist[0]['banner']; ?>.jpg);">
        <!-- <?php $id = $movielist[0]['id']; ?> -->
        <div class="heroinformation">
            <!-- <h5><?php echo $movielist[0]; ?></h5> -->
            <h5><?php echo $movielist['title'] ?></h5>
            <p><?php echo $movielist['description'] ?></p>
        </div>
        <a href="movies.php?id=<?php echo $movielist[0]['id']; ?>"><i class="fa-solid fa-play"></i> Play</a>
    </section>
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

    <?php print_r($movielist) ?>
</main>

<?php include 'layout/footer.php' ?>