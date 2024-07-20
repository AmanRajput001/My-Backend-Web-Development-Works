<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value=female>Female <br>
        <input type="radio" name="gender" value=other>other

        <input type="checkbox" name="food[]" value="pizza">Pizza <br>
        <input type="checkbox" name="food[]" value="burger">Burger <br>
        <input type="checkbox" name="food[]" value="other">other
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["gender"])){
            echo "Your Gender is " . $_POST["gender"];
        }

        if(isset($_POST["food"])){
            echo "Your fav food items are ";
            foreach($_POST["food"] as $food){
                echo $food;
            }
        }
    }

?>