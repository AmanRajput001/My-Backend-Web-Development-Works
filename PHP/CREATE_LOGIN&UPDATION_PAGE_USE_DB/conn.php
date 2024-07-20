<?php
    session_start();
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_database = "login_db_php_try";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);
    }catch(mysqli_sql_exception){
        echo "Unable to Connect";
    }
?>
