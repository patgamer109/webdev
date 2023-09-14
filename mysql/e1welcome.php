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
        if ($_SESSION["sesUser"]) {
            echo "Welcome: " . $_SESSION["sesUser"];
        } else {
            header("Location: e1login.php");
        }
    ?>
</body>
</html>