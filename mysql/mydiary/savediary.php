<?php
session_start();
require('connection.php');
require('functions.php');
if (!isUserLoggedIn()) {
    header('Location: login.php');
    die();
}
if (empty($_POST) || empty($_POST["diary"])) {
    header('Location: index.php');
    die();
}
$diary = $_POST["diary"];
if (strlen($diary) < 4) {
    $_SESSION["errors"] = "Diary should have at least four chars";
    header('Location: index.php');
    die();
}

$sql = "UPDATE users set diary=? WHERE email=?";
$stm = $conn->prepare($sql);
$email = getUserEmail();
$stm->bind_param("ss", $diary, $email);
$res = $stm->execute();
$_SESSION["errors"] = "";
if ($res && $stm->affected_rows > 0) {
    $_SESSION["message"] = "Diary updated";
} else {
    $_SESSION["errors"] = "Diary was mpt updated: " . $conn->error;
}
if(empty($_POST("isAjax"))) {
    header('Location: index.php');
} else {
    echo $_SESSION["errors"] ?  : 1;
}
