<?php
    $password = "ABC123";

    $hash = password_hash($password, PASSWORD_DEFAULT); // PASSWORD_DEFAULT => PASSWORD_BCRYPT
    echo $hash . "<br>";

    if(password_verify("ABC",$hash)){
        echo "CORRECT ";
    }else{
        echo "WRONG ";
    }

    if(password_verify("ABC123",$hash)){
        echo "CORRECT ";
    }else{
        echo "WRONG ";
    }
?>
