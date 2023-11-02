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
$sql = "SELECT email, password FROM users WHERE email=?";
$stm = $conn->prepare($sql);
$stm->bind_param('s', $email);
$res = $stm->execute();
$result = $stm->get_result();

// var_dump($result);
// die();

if ($res && $result->num_rows) {
    $row = $result->fetch_assoc();
    $stm->close();
    if (password_verify($password, $row['password'])) {
        $_SESSION["message"] = "User logged in correctly";
        $_SESSION["user_email"] = $email;
        if ($remember) {
            setcookie("user_email",$email, time() + 24 * 3600);
        }
        header("Location: index.php");
        die();
    } else {
        $_SESSION["errors"] = "wrong email or password";
        header("Location: login.php");
        die();
    }
} else {
    $stm->close();
    $_SESSION["errors"] = "this mail does not exist";
    header("Location: login.php");
    die();
}

// var_dump($_POST); 
?>