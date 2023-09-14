<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_POST) {
            $txtUser = $_POST["txtUser"];
            setcookie("cooUser", $txtUser, time() + 120);
            // time() + 60 = 1 minute
            // time() + 60 * 60 = 1 hour
            // time() + 60 * 60 * 24 = 1 day
            // and so on...
            // to destroy cookie set cookie on past
            // setcookie("cooUser", "", time() - 60);
            // this instruction on past time so this is expired
        }
    ?>
    <form id="loginForm" name="loginForm" method="post">
        <input type="text" id="txtUser" name="txtUser">
        <input type="submit" id="btnSubmit" name="btnSubmit" value="Login">
    </form>
</body>
</html>