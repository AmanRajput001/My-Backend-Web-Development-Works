<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "PHP_TRY_DB1";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
        echo "DONE!!" . "<br>";
    }catch(mysqli_sql_exception){
        echo "Unable to Connect";
    }
?>