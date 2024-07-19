<?php
    $foods = array("Apple", "Mango", "Banana", "Grapes");

    echo "Foods: ";
    foreach($foods as $food){
        echo $food . " ";
    }
    echo "<br>";

    $foods[1] = "(I am Fruit King)";
    foreach($foods as $food){
        echo $food . " ";
    }
    echo "<br>";

    array_push($foods, "Pineapple", "Guava");
    foreach($foods as $food){
        echo $food . " ";
    }
    echo "<br>";

    $r = array_pop($foods);
    echo "Poped: " . $r . "<br>";

    array_shift($foods);
    foreach($foods as $food){
        echo $food . " ";
    }
    echo "<br>";

    $rfoods = array_reverse($foods);
    foreach($rfoods as $rfood){
        echo $rfood . " ";
    }
    echo "<br>";

    echo count($foods);  


?>