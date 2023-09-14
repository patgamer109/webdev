<?php 
    $myPwdClear = "DEDEDE";
    echo "myPwdClear: " .$myPwdClear. "<br>";
    $myCriptedPwd = password_hash($myPwdClear, PASSWORD_DEFAULT);
    echo "myCriptedPwd: " .$myCriptedPwd. "<br>";
    $myCheckPwd = password_verify("prova1", $myCriptedPwd);
    echo "myCheckPwd: " .$myCheckPwd. "<br>";
    $myCheckPwd = password_verify($myPwdClear, $myCriptedPwd);
    echo "myCheckPwd: " .$myCheckPwd. "<br>";
?>