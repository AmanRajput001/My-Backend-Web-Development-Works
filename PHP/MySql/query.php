<?php
    include("conn.php");

    $sql = 'SELECT * FROM ABC';

    try{
        if(($result = mysqli_query($conn, $sql))){
            while(($row = mysqli_fetch_assoc($result))){
                echo $row["Name"] . "<br>";
            }
            
        }
    }catch(mysqli_sql_exception){
        echo "Unable to fetch";
    }


?>