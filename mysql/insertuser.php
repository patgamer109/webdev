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

        // insert new user
        $query = "INSERT INTO users (email, password) VALUES ('myuserinsert2@gmail.com', 'mypwdinsert2')";
        $result = mysqli_query($link, $query);

        if ($result) {
            echo "user is inserted on table";
        } else {
            echo "query is not ok";
        }
    ?>
</body>
</html>