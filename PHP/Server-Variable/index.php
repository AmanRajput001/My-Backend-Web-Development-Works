<?php
    foreach($_SERVER as $KEY => $VALUE){
        echo $KEY . " => " . $VALUE . "<br>";
    }

    echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" <?php $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="username" placeholder="User Name">
        <input type="text" name="password" placeholder="Password"/>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // if(isset($_POST["username"]) && isset($_POST["password"])){
        //     echo $_POST["username"] . " " . $_POST["password"];
        // }

        if(!(empty($_POST["username"]) || empty($_POST["password"]))){
            echo $_POST["username"] . " " . $_POST["password"];
        }else{
            echo "Please fill all details.";
        }
    }

?>

