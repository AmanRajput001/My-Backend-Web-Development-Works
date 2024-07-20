<?php 
    setcookie("CookieName", "CookieValue", time() + (8600)); // 8600 in 1 day
    setcookie("favfood", "pizza", time() + (8600 * 3)); // 3 days 

    foreach($_COOKIE as $key => $value){
        echo $key . '=>' . $value;
        echo "<br>";
    }
?>