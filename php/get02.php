<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // print_r($_GET);
        if ($_GET) {
            $varNominativo = $_GET["nominativo"];
            if ($varNominativo != "") {
                echo "<p>Hi " . $varNominativo . "!</p>";
            }            
            
        }        
    ?>
    <p>what's your name</p>
    <form>
        <input name="nominativo" type="text">
        <input type="submit" value="Send">
    </form>
</body>
</html>