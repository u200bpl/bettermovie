<?php
    require_once '../../header.php';
    require_once '../../backend/config.php';

    // Query
    require_once '../../backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
Upload page

<?php require_once '../../footer.php'; ?>