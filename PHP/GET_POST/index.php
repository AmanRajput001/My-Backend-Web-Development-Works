<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST</title>
</head>
<body>
    <div>
        <h1>Form1</h1>
        <form action="index.php" method="get">
        <input type="text" placeholder="User Name" name="userName"/><br>
        <input type="password" placeholder="Password" name="password"/>
        <input type="submit">
    </form>
    </div>
    
    <div>
        <h1>Form2</h1>
        <form action="index.php" method="post">
        <input type="text" placeholder="User Name" name="userName"/><br>
        <input type="password" placeholder="Password" name="password"/>
        <input type="submit">
    </form>
    </div>
</body>
</html>

<?php 
    echo "Form1: ".$_GET["userName"]." ".$_GET["password"];
    echo "Form2: ".$_POST["userName"]." ".$_POST["password"];
?>


    