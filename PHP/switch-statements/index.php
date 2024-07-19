<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swicth</title>
</head>
<body>
    <div>
        <h1>Tell me your Day</h1>
        <form action="index.php" method="post">
        <input type="text" placeholder="Day" name="day"/><br>
        <input type="submit">
    </form>
    </div>
</body>
</html>

<?php
    $day = $_POST["day"];
    
    switch($day){
        case "Monday": echo "Working Day its not exicting"; break;
        
        case "Tuesday": echo "Working Day its okay"; break;
        
        case "Wednesday": echo "Working Day its same as yesterday as well as tommorow"; break;
        
        case "Thrusday": echo "Weekend is coming..."; break;
        
        case "Friday": echo "Last Working Day Happy"; break;
        
        case "Saturday": echo "Holiday Holiday Enjoy"; break;

        case "Sunday": echo "Let's Party !!"; break;

        default: echo "It's not week day.";
    }
?>