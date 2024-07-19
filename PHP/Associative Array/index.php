<?php
    $countries = array("India" => "Paskistan", 
"China" => "USA", 
"Russia" => "Ukrain");

    echo "countries: ";
    foreach($countries as $country => $enemy){
        echo "(" . $country . "V/s" . $enemy . ")";
    }
    echo "<br>";

    $countries[0] = "India => (I am Diverse Country)";
    foreach($countries as $country => $enemy){
        echo "(" . $country . "V/s" . $enemy . ")";
    }
    echo "<br>";

    array_push($countries, "France => XYZ");
    foreach($countries as $country => $enemy){
        echo "(" . $country . "V/s" . $enemy . ")";
    }
    echo "<br>";

    $r = array_pop($countries);
    echo "Poped: " . $r . "<br>";

    array_shift($countries);
    foreach($countries as $country => $enemy){
        echo "(" . $country . "V/s" . $enemy . ")";
    }
    echo "<br>";

    $rcountries = array_reverse($countries);
    foreach($rcountries as $rcountry){
        echo $rcountry . " ";
    }
    echo "<br>";

    echo count($countries);  


?>