<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // print the mathematical table of 5
        echo "<ul>";
        $i = 0;
        while ($i <= 50) {
            if (($i %5 == 0) && ($i != 0)) {
                echo "<li>value: " . $i . "</li>";
            }
            $i++;
        }
        echo "</ul>";
        echo "<br><br>";
        // print array elements based on sizeof
        $myArray2 = array("Rob", "Kirsten", "Tommy", "Ralphy");
        $limit = sizeof($myArray2);
        echo "<ul>";
        $i = 0;
        while ($i < $limit) {
            echo "<li>myArray2[" . $i . "]: " . $myArray2[$i] . "</li>";            
            $i++;
        }
        echo "</ul>";
        echo "<br><br>";
    ?>
</body>
</html>