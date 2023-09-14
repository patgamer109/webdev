<?php 
    // start session
    session_start();
    // create permanently variable to use
    $_SESSION["username"] = "myuser";
    // use the variable
    echo "create session[username]: " . $_SESSION["username"];
    // after load this page, if i use comment the assign instruction (row number 4)
    // variable $_SESSION["username"]; exist and have the same value until i close
    // the browser or use the command to close session
    // to use the session variable we even should use session_start(); 
?>