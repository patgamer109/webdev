<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = "Rob";
        if ($user == "Rob") {
            echo "Hello Rob!";
        } else {
            echo "I don't know you!";
        }
        echo "<br><br>";
        $age = 15;
        if ($age >= 18 && ($user == "Rob" || $user == "Bob")) {
            echo "You may proceed";
        } else {
            echo "We can stop you!";
        }
    ?>
</body>
</html>