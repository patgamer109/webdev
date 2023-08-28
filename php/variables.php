<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Rob";
        echo "<p>name: " . $name . "</p>";
        $myNum = 45;
        $myNum = $myNum * 2;
        echo "<p>myNum: " . $myNum . "</p>";
        $myBool = true;
        echo "<p>myBool: " . $myBool . "</p>";
        $myBool = false;
        echo "<p>myBool: " . $myBool . "</p>";
        $variableName = "name";
        echo "<p>variableName: " . $$variableName . "</p>";
    ?>
</body>
</html>
