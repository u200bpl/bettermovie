<?php include 'layout/header.php' ?>

<?php
    require_once './backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

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