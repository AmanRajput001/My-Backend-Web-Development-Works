<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="User Name">
        <input type="text" name="password" placeholder="Password"/>
        <input type="submit" name="submit">
    </form>

    <a href="seeme.php">SEE ME</a>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        // if(isset($_POST["username"]) && isset($_POST["password"])){
        //     echo $_POST["username"] . " " . $_POST["password"];
        // }

        if(!(empty($_POST["username"]) || empty($_POST["password"]))){
            echo $_POST["username"] . " " . $_POST["password"];
            $_SESSION['username'] = $_POST["username"];
            $_SESSION['password'] = $_POST["password"];
        }else{
            echo "Please fill all details.";
        }
    }

?>