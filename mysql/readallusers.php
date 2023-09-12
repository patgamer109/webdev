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
        $link = mysqli_connect("localhost", "root", "", "myuserstest");
        if(mysqli_connect_error()) {            
            // die function is used to stop the script
            die("connection failed");
        }

        // rest all users
        $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);
        if ($result) {            
            while ($row = mysqli_fetch_array($result)) {
                print_r($row);
                echo "<br>";
            }
        } else {
            echo "query is not ok";
        }
        echo "<hr>";

        // use of like, rest all user with gmail.com
        $query = "SELECT * FROM users WHERE email LIKE '%gmail.%'";
        $result = mysqli_query($link, $query);
        if ($result) {            
            while ($row = mysqli_fetch_array($result)) {
                print_r($row);
                echo "<br>";
            }
        } else {
            echo "query is not ok";
        }
        echo "<hr>";

        // use of and or not
        $query = "SELECT * FROM users WHERE id > 1 AND id < 4";
        $result = mysqli_query($link, $query);
        if ($result) {            
            while ($row = mysqli_fetch_array($result)) {
                print_r($row);
                echo "<br>";
            }
        } else {
            echo "query is not ok";
        }
        echo "<hr>";

        // select only two fields
        $query = "SELECT id, email FROM users WHERE id = 2 OR email LIKE '%myhost.com'";
        $result = mysqli_query($link, $query);
        if ($result) {            
            while ($row = mysqli_fetch_array($result)) {
                print_r($row);
                echo "<br>";
            }
        } else {
            echo "query is not ok";
        }
        echo "<hr>";

        // select with special '
        // first mode prevent on name with ' using \
        // $name = "Brian o\'Really";
        // $query = "SELECT * FROM users WHERE name = '" . $name . "'";
        // second mode, prevent all particular characters
        $name = "Brian o'Really";
        $query = "SELECT * FROM users WHERE name = '" . mysqli_real_escape_string($link, $name) . "'";
        $result = mysqli_query($link, $query);
        if ($result) {            
            while ($row = mysqli_fetch_array($result)) {
                print_r($row);
                echo "<br>";
            }
        } else {
            echo "query is not ok";
        }
        echo "<hr>";
    ?>
</body>
</html>