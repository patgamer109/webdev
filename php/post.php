<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myArr = ["marco", "luca", "giovanni", "mattia"];
        if ($_POST) {
            $myname = $_POST["myname"];
            if ($myname == "") {
                echo "<p>specify a name</p>";
            } else {
                $isKnown = false;
                foreach($myArr as $key => $value) {
                    if ($value == $myname) {
                        $isKnown = true;
                        break;
                    }
                }
                if ($isKnown) {
                    echo "<p>" . $myname . " is known!</p>";
                } else {
                    echo "<p>" . $myname . " is not known!</p>";
                }
            }
        // } else {
        //     echo "<p>not sended variables</p>";
        }
    ?>
    <p>Please enter who are you</p>
    <form method="post">
        <input name="myname" type="text">
        <input type="submit" value="Send">
    </form>
</body>
</html>