<?php
    require_once '../head.php';
    require_once '../backend/config.php';
?>

    <?php
        $id = $_GET['id'];

        // Query
        require_once '../backend/conn.php';
        $query = "SELECT * FROM movies WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
</header>

<main>
    <?php foreach($movielist as $movie): ?>
        <?php If (empty($movie['iframe'])) { ?>
            <div class="videoerror">
                <p>THIS VIDEO IS UNAVAIBLE</p>
                <a href="<?php echo $base_url; ?>/movie">Go back</a>
            </div>
        <?php } else { ?>
            <div class="movieoverlay">
                <a href="<?php echo $base_url; ?>/movie"><i class="test fa-solid fa-angles-left"></i> <?php echo $movie['title']; ?></a>
            </div>

            <div>
                <div class="moviesection">
                    <iframe src="https://databasegdriveplayer.co/player.php?imdb=<?php echo $movie['iframe']; ?>" controls="0" frameborder="0" allowfullscreen="1"></iframe>
                </div>
            </div>
        <?php } ?>
    <?php endforeach; ?>
</main>