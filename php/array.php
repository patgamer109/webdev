<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myArray = array("Rob", "Kirsten", "Tommy", "Ralphy");
        print_r($myArray);
        // var_dump($myArray);
        echo "<p>myArray[1]: $myArray[1] </p>";
        $anotherArray[0] = "pizza";
        $anotherArray[1] = "pasta";
        $anotherArray[2] = "jogurth";
        $anotherArray[5] = "icecream";
        print_r($anotherArray);
        echo "<br><br>";
        // can add different type on array
        $anArray = [1, 2, 3, "cip", "ciop", true, false];        
        print_r($anArray);
        echo "<br><br>";
        //every array is associative array
        $person1 = array("name" => "Rob", "surname" => "Jacobs", "age" => 23, "weight" => 84, "height" => 195);
        print_r($person1);
        echo "<p><ul>";
        echo "<li>name: " . $person1["name"] . "</li>";
        echo "<li>surname: " . $person1["surname"] . "</li>";
        echo "<li>age: " . $person1["age"] . "</li>";
        echo "</ul></p>";
        echo "<br><br>";
        echo "sizof(person1): " . sizeof($person1);
        // add on array tail
        echo "<br><br>";
        $myArray[] = "Jonny";
        print_r($myArray);
        // remove from array tail
        echo "<br><br>";
        $lenOfMyArray = sizeof($myArray);
        unset($myArray[$lenOfMyArray - 1]);
        print_r($myArray);
    ?>
</body>
</html>