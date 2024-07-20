<?php
    include("conn.php");

    $sql = 'INSERT INTO ABC VALUES("Aman", 12398765), ("Raa", 11111111111)';

    try{
        if(($result = mysqli_query($conn, $sql))){
            echo $result;
        }
    }catch(mysqli_sql_exception){
        echo "Unable to fetch";
    }


?>