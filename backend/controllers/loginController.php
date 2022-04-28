<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once '../conn.php';
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([":username" => $username]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1) {
    header("Location: ../../login");
    $msg = "No user found!";
}

if(!password_verify($password, $user['password'])) {
    $msg = "No user found!";
    header("Location: ../../login");
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_roll'] = $user['userrol'];

header("location: ../../index.php");
?>