<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>first part of the main file</h2>
    <?php
        echo "<h3>first part of php on main file</h3>";
        include("included.php");
        echo "<h3>second part of php on main file</h3>";
    ?>
    <h2>second part of the main file</h2>
</body>
</html>