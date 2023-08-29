<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // use address http://localhost:8084/webdev/php/get01.php?name=mario&surname=rossi&age=48
        // instead of http://localhost:8084/webdev/php/get01.php
        if ($_GET) {
            echo "<p>those are get variables</p>";
            // print_r($_GET);
            foreach($_GET as $key => $value) {
                echo "<p>" . $key . ": " . $value . "</p>";
            }
        } else {
            echo "<p>there aren't get variables specified</p>";
        }        
    ?>
</body>
</html>