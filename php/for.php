<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // print first five elems of array
        $myArray = ["a", "b", "c", "d", "e", "f", "g", "h"];
        echo "<ul>";
        for ($i = 0; $i < 5; $i++) {
            echo "<li>myArray[" . $i . "]: " . $myArray[$i] . "</li>";
        }
        echo "</ul>";
        echo "<br><br>";
        // print pair values from 2 to 30
        echo "<ul>";
        for ($i = 0; $i <= 30; $i++) {
            if (($i % 2 == 0) && ($i != 0)) {
               echo "<li>value: " . $i . "</li>";
            }   
        }
        echo "</ul>";
        echo "<br><br>";
        // print array elements based on sizeof
        $myArray2 = array("Rob", "Kirsten", "Tommy", "Ralphy");
        $limit = sizeof($myArray2);
        echo "<ul>";
        for ($i = 0; $i < $limit; $i++) {
            echo "<li>myArray2[" . $i . "]: " . $myArray2[$i] . "</li>";            
        }
        echo "</ul>";
        echo "<br><br>";
        // print array using foreach
        echo "<ul>";
        foreach ($myArray2 as $key => $value) {
            echo "<li>myArray2[" . $key . "]: " . $value . "</li>";            
        }
        echo "</ul>";
        echo "<br><br>";
    ?>
</body>
</html>