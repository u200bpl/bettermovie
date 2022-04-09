<?php include 'layout/header.php' ?>

<?php
    $id = $_GET['id'];

    // Query
    require_once './backend/conn.php';
    $query = "SELECT * FROM movies WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($movielist as $movie): ?>
    <p><?php echo $movie['id']; ?></p>
    <p><?php echo $movie['title']; ?></p>
    <p><?php echo $movie['genre']; ?></p>
    <img src="style/img/<?php echo $movie['banner']; ?>.jpg" alt="<?php echo $movie['title']; ?> img banner">
    <p><?php echo $movie['year']; ?></p>
    <p>Trailer</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $movie['trailer']; ?>" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
<?php endforeach; ?>

<?php include 'layout/footer.php' ?>