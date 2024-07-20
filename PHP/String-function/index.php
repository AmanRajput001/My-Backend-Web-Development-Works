<?php 
    $username = "  Aman Rajput               ";
    $number = "1-701-456-321";

    echo strtolower($username). "<br>";
    echo strtoupper($username). "<br>";
    echo trim($username). "<br>";
    echo str_pad($username, 20, '0'). "<br>";;
    echo str_replace("-","@",$number);
    echo strrev($username). "<br>";
    echo str_shuffle($username). "<br>";
    echo strcmp($username, "  Aman Rajput               "). "<br>";;
    echo strcmp($username, "Aman Rajput"). "<br>";;
?>