<?php
    require_once '../../layout/head.php';
    require_once '../../layout/header.php';

    // Query
    require_once './backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
Upload page