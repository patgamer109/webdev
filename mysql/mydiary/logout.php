<?php

session_start();
require ("functions.php");
if (empty($_POST) || empty($_POST["logout"])) {
    header("Location: index.php");
}
logout();
header("Location: login.php");
?>