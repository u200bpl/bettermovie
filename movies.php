<?php
    require_once 'head.php';
    // require_once 'header.php';
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