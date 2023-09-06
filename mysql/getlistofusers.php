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
        $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            // print_r($row);
            echo "id: " . $row["id"] . ", email: " . $row["email"] . ", password: " . $row["password"];
        } else {
            echo "query is not ok";
        }
    ?>
</body>
</html>