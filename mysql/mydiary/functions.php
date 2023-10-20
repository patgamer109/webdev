<?php
function isUserLoggedIn() {
    return $_SESSION["user_email"] ?? $_COOKIE["user_email"] ?? "";
}
function logout() {
    session_destroy();
    setcookie("user_email", "", time() - 1);
    return $_SESSION["user_email"] ?? $_COOKIE["user_email"] ?? "";
}
?>