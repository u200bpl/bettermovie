<?php

$title = $_POST['name'];
if ($title == null) {
    $msg = "Movie name is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$description = $_POST['desc'];
if ($description == null) {
    $msg = "Description is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$genre = $_POST['genre'];
if ($genre == null) {
    $msg = "Genre is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$duration = $_POST['dur'];
if ($duration == null) {
    $msg = "Duration is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$banner = $_POST['banner'];
if ($banner == null) {
    $msg = "banner is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$year = $_POST['year'];
if ($year == null) {
    $msg = "Released Year is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$trailer = $_POST['trailer'];
if ($trailer == null) {
    $msg = "Trailer is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

$iframe = $_POST['iframe'];
if ($iframe == null) {
    $msg = "Iframe is empty!";
    header("location: ../../admin/upload/index.php?msg=$msg");
    exit;
}

require_once '../conn.php';
$query = "INSERT INTO movies (title, description, genre, duration, banner, year, trailer, iframe) 
VALUES (:title, :description, :genre, :duration, :banner, :year, :trailer, :iframe)";
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
]);

header("location: ../../index.php?msg=Movie has been saved");
?>