<?php
    $conn = new mysqli('localhost', 'root', '','mydiary');
    // var_dump($conn);
    if ($conn->connect_error) {
        die("error in connection to database");
    }
    // } else {
    //     echo 'db connected';
    // }
?>

