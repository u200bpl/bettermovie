<?php

session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRetry = $_POST['passwordRetry'];
if ($password != $passwordRetry) {
    $msg = "Passwords do not match!";
    header("location: ../../register/index.php?msg=$msg");
    exit;
}
$hash = password_hash($password, PASSWORD_DEFAULT);

require_once '../conn.php';
$queryu = "SELECT * FROM users WHERE username = :username";
$statementu = $conn->prepare($queryu);
$statementu->execute([":username" => $username]);

$querye = "SELECT * FROM users WHERE email = :email";
$statemente = $conn->prepare($querye);
$statemente->execute([":email" => $email]);

if(!$statementu->rowCount() < 1) {
    $msg = "Username already in use!";
    header("location: ../../register/index.php?msg=$msg");
    exit;
}

if(!$statemente->rowCount() < 1) {
    $msg = "Email already in use!";
    header("location: ../../register/index.php?msg=$msg");
    exit;
}

$query = "INSERT INTO users (username, email, password) 
VALUES (:username, :email, :password)";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $username,
    ":email" => $email,
    ":password" => $hash,
]);

header("location: ../../index.php");
?>