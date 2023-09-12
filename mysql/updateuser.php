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

        // update user
        $query = "UPDATE users SET email = 'mynewmail@gmail.com' WHERE id = 4 LIMIT 1";
        // LIMIT is not necessary but is a good thing on query to sure cause changes only on 1 row
        $result = mysqli_query($link, $query);

        if ($result) {
            echo "user is inserted on table";
        } else {
            echo "query is not ok";
        }
    ?>
</body>
</html>