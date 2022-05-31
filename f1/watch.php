<?php
    require_once '../head.php';
    require_once '../backend/config.php';
?>

    <?php
        $id = $_GET['id'];

        // Query
        require_once '../backend/conn.php';
        $query = "SELECT * FROM f1 WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
</header>

<main>
    <?php foreach($movielist as $movie): ?>
        <div class="movieoverlay">
            <a href="<?php echo $base_url; ?>/f1"><i class="test fa-solid fa-angles-left"></i> Formula 1 <?php echo $movie['year']; ?> <?php echo $movie['country']; ?> Grand Prix</a>
        </div>

        <div>
            <div class="moviesection">
                <iframe src="//ok.ru/videoembed/<?php echo $movie['iframe']; ?>" controls="0" frameborder="0" allowfullscreen="1"></iframe>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php require_once '../footer.php' ?>