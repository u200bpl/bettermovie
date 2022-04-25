<?php

$title = $_POST['name'];
$description = $_POST['desc'];
$genre = $_POST['genre'];
$duration = $_POST['dur'];
$banner = $_POST['banner'];
$year = $_POST['year'];
$trailer = $_POST['trailer'];
$iframe = $_POST['iframe'];
$quality = $_POST['quality'];

require_once '../conn.php';
$query = "INSERT INTO movies (title, description, genre, duration, banner, year, trailer, iframe, quality) 
VALUES (:title, :description, :genre, :duration, :banner, :year, :trailer, :iframe, :quality)";
$statement = $conn->prepare($query);
$statement->execute([
    ":title" => $title,
    ":description" => $description,
    ":genre" => $genre,
    ":duration" => $duration,
    ":banner" => $banner,
    ":year" => $year,
    ":trailer" => $trailer,
    ":iframe" => $iframe,
    ":quality" => $quality
]);

header("location: ../../index.php?msg=Movie has been saved");
?>