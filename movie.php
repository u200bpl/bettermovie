<?php
    require_once 'head.php';
    require_once 'header.php';
    require_once 'backend/config.php';

    session_start();
    if(!isset($_SESSION['user_id'])) {
        $msg = "Je moet eerst inloggen!";
        header("Location: subscriptions.php");
        exit;
    }
?>

    <?php
        $id = $_GET['id'];

        // Query
        require_once 'backend/conn.php';
        $query = "SELECT * FROM movies WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($movielist as $movie):
    ?>
        <section class="moviehero" style="background-image: url(style/img/movies/<?php echo $movie['banner']; ?>.jpg);"> 
            <div class="movieinfo">
                <div class="moviecontent">
                    <h5><?php echo $movie['title']; ?></h5>
                    <div class="info-btn">
                        <a href="">Trailer</a>
                        <a href=""><?php echo $movie['quality']; ?></a>
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

<?php foreach($movielist as $movie): ?>
    
<?php endforeach; ?>