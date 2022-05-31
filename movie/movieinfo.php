<?php
    require_once '../head.php';
    require_once '../header.php';
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

        foreach($movielist as $movie):
    ?>
        <section class="moviehero" style="background-image: url(<?php echo $base_url; ?>/style/img/movies/<?php echo $movie['banner']; ?>.jpg);"> 
            <div class="movieinfo">
                <div class="sectioninfo">
                    <h5><?php echo $movie['title']; ?></h5>
                    <div class="info-btn">
                        <a href="watch.php?id=<?php echo $id;?>"><i class="fa-solid fa-video"></i> Watch movie</a>
                        <a href="https://www.youtube.com/watch?v=<?php echo $movie['trailer']; ?>"><i class="fa-solid fa-clapperboard"></i> Trailer</a>
                        <a><?php echo $movie['quality']; ?></a>
                    </div>

                    <div class="description"><p><?php echo $movie['description']; ?></p></div>
                    <p><span>Release date: </span><?php echo $movie['year']; ?></p>
                    <p><span>Genre: </span><?php echo $movie['genre']; ?></p>
                    <p><span>Duration: </span><?php echo $movie['duration']; ?> min</p>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</header>

<?php require_once 'footer.php' ?>