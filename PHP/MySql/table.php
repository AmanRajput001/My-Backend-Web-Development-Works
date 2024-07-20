<?php 
    include('conn.php');

    $sql = "CREATE TABLE ABC (
            Name VARCHAR(20),
            phoneno INT
        );";

    try {
        if (mysqli_query($conn, $sql)) {
            echo "TABLE CREATED!!" . "<br>";
        } else {
            throw new Exception("Unable to create table: " . mysqli_error($conn));
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
