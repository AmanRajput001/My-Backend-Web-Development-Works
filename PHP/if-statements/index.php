<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if...else</title>
</head>
<body>
    <div>
        <h1>Form1</h1>
        <form action="index.php" method="post">
        <input type="number" placeholder="Quantity" name="quantity"/><br>
        <input type="number" placeholder="price" name="price"/>
        <input type="submit">
    </form>
    </div>
</body>
</html>

<?php
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $discount = null;

    $total = $quantity * $price;

    echo "Total Bill Amount: " . " $" .$total . "<br>";

    if($quantity > 80){
        $discount = 20;
    }else if($quantity >= 100){
        $discount = 35;
    }else{
        $discount = 0;
    }

    echo "You Got " . $discount . "% Discount<br>";
    echo "Final Amount to pay: $" . ($total - ($total * $discount/100)) ;
?>