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
}

$passHash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stm = $conn->prepare($sql);
$stm->bind_param('ss', $email, $passHash);
$res = $stm->execute();
if ($res && $stm->affected_rows) {
    $_SESSION["success"] = "user is registered";
    $_SESSION["user_email"] = $email;
    if ($remember) {
        setcookie("user_email", $email, time() * 24 * 3600);
    }
    header("Location: index.php");
    die();
} else {
    $_SESSION["errors"] = $conn->err;
    header("Location: signedup.php");
    die();
}
$stm->close();

var_dump($_POST); 
?>