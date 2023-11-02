<?php
function isUserLoggedIn() {
    return $_SESSION["user_email"] ?? $_COOKIE["user_email"] ?? "";
}
function logout() {
    session_destroy();
    setcookie("user_email", "", time() - 1);
    return $_SESSION["user_email"] ?? $_COOKIE["user_email"] ?? "";
}
function getUserEmail() {
    return $_SESSION['user_email'] ?? $_COOKIE["user_email"] ?? "";
}
function getUserDiary() {
    $diary = "";    
    $sql = "SELECT diary from users WHERE email =?";
    $stm = $GLOBALS["conn"]->prepare($sql);
    if (!$stm) {
        die($GLOBALS["conn"]->error);
    }
    $email = getUserEmail();
    $stm->bind_param("s", $email);
    $stm->bind_result($diary);
    $stm->execute();
    $stm->fetch();
    return $diary;
}
?>