<?php
    require_once 'layout/head.php';
    // require_once 'layout/header.php';
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
    <!-- <video width="100%" height="100%" controls="controls" autoplay="autoplay" id="vid">
        <source src="movies/<?php echo $movie['movie']; ?>.mp4" type="video/mp4">
    </video> -->

    <div id="player"></div>
    <script>
        var player = new Clappr.Player({
            source: "movies/<?php echo $movie['movie']; ?>.mp4",
            parentId: "#player",
            height: "100%",
            width: "100%",
            autoPlay: true,
        });
    </script>
    <!-- <iframe src="https://databasegdriveplayer.co/player.php?imdb=<?php echo $movie['iframe']; ?>" controls="0" frameborder="0" width="100%" height="100%" allowfullscreen="1"> </iframe> -->
<?php endforeach; ?>