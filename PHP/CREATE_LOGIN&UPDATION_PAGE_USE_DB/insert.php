<?php
    include('conn.php');

    $sql = 'INSERT INTO userdetails value("' . $_SESSION["username"] . '","' . $_SESSION["password"] . '","' . $_SESSION["email"] . '")';
    echo $sql;
    try{
        mysqli_query($conn, $sql);
    }catch(mysqli_sql_exception){
        echo "Unable to Insert";
    }

    mysqli_close($conn);
?>