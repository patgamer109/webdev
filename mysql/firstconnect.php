<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // do not use the port, localhost is localhost
        mysqli_connect("localhost", "root", "");
        if(!mysqli_connect_error()) {
            echo "connection ok";
        } else {
            // do not show eventualiy error to prevent hacking
            echo "connection failed";
        }
    ?>
</body>
</html>