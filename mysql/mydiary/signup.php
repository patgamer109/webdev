<?php
session_start();
require('connection.php');
if (empty($_POST)) {
    header('Location: index.php');
    die();
}
$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";
$remember = $_POST['remember'] ?? "";
$errors = "";
if (empty($email)) {
    $errors .= "email is required<br>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors .= "email is invalid<br>";
}
if (empty($password) || strlen($password) < 6) {
    $errors .= "password is required<br>";
}

// bind is used to prevent sequel injection
$sql = "SELECT email FROM users WHERE email=?";
$stm = $conn->prepare($sql);
$stm->bind_param('s', $email);
$res = $stm->execute();
if ($res && $stm->num_rows) {
    $errors .= "email is already taken";
}
$stm->close();

if (!empty($errors)) {
    $_SESSION["errors"] = $errors;
    header('Location: signedup.php');
    die();
}

$passHash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stm = $conn->prepare($sql);
$stm->bind_param('ss', $email, $passHash);
$res = $stm->execute();
if ($res && $stm->affected_rows) {
    $_SESSION["success"] = "user is registered";
}
$stm->close();

var_dump($_POST); 
?>