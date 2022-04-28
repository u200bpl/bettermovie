<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once '../conn.php';
$query = "INSERT INTO users (username, email, password) 
VALUES (:username, :email, :password)";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $username,
    ":email" => $email,
    ":password" => $password,
]);

header("location: ../../index.php");
?>