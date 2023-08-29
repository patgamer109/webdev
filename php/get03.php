<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_GET) {
            $mynum = $_GET["mynum"];
            if (is_numeric($mynum) && $mynum > 0 && $mynum = round($mynum, 0)) {
                $i = 2; 
                $isPrime = true;           
                while ($i < $mynum) {
                    if ($mynum % $i == 0) {
                        // Number is not prime
                        $isPrime = false;
                    }
                    $i++;
                }
                if ($isPrime) {
                    echo "<p>Number " . $mynum . " is prime";
                } else {
                    echo "<p>Number " . $mynum . " is not prime";
                }
            } else {
                echo "<p>" . $mynum . " is not a valid number</p>"; 
            }           
        }                
    ?>
    <p>Please enter a whole number</p>
    <form>
        <input name="mynum" type="text">
        <input type="submit" value="Send">
    </form>
</body>
</html>