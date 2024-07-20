<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seeme</title>
</head>
<body>
    xyz---------- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore vero laborum similique officiis fugiat. Labore, magni reprehenderit corporis ut consequatur laudantium nesciunt dolore sunt aspernatur unde aut exercitationem veniam amet?
    <hr>
    <?php echo $_SESSION["username"] . " " . $_SESSION["password"]; ?>

    <form action="seeme.php" method="post">
        <button name="gotomain">go to main</button>
    </form>


</body>
</html>

<?php
    function gotomain(){
        session_destroy();
        header("Location: index.php");
    }

    if(isset($_POST["gotomain"])){
        gotomain();
    }
?>