<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if ($_POST) {
            $txtUser = $_POST["txtUser"];
            $_SESSION["sesUser"] = $txtUser;
        }
    ?>
    <form id="loginForm" name="loginForm" method="post">
        <input type="text" id="txtUser" name="txtUser">
        <input type="submit" id="btnSubmit" name="btnSubmit" value="Login">
    </form>
</body>
</html>