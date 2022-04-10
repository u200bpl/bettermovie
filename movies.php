<?php
    // require_once 'header.php';
    require_once 'head.php';
    require_once 'backend/config.php';
?>

    <?php
        $id = $_GET['id'];

        // Query
        require_once 'backend/conn.php';
        $query = "SELECT * FROM movies WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
</header>

<?php foreach($movielist as $movie): ?>
    <!-- <p><?php echo $movie['id']; ?></p>
    <p><?php echo $movie['title']; ?></p>
    <p><?php echo $movie['genre']; ?></p> -->
    <!-- <img src="style/img/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner"> -->
    <!-- <p><?php echo $movie['year']; ?></p> -->
    <!-- <p>Trailer</p> -->
    <iframe src="https://databasegdriveplayer.co/player.php?imdb=<?php echo $movie['iframe']; ?>" controls="0" frameborder="0" width="100%" height="100%" allowfullscreen="1"> </iframe>
<?php endforeach; ?>

<?php require_once 'footer.php' ?>