<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            width: 100vw;
            background-image: url("assests/11.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 20vmin;
            padding-bottom: 20vmin;
        }
    </style>
</head>

<body>

</body>
</html>

<?php
$sql = 'SELECT * FROM userDetails WHERE name = "' .  $_SESSION["username"] . '" and password = "' . $_SESSION["password"] . '"';

try {
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "IN";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="d-flex justify-content-center">
                    <div class="flex-column align-items-center text-light bg-success text-center rounded-2 w-50 p-3">
                        <h1 class="bg-danger rounded-top p-2"> Your Details </h1>
                        <div class="display-5 p-3 border border-white border-2 m-2">' . "Name: " . $row['name'] . "<br>" .
                        "Password: " . $row['password'] . "<br>" .
                        "Email: " . $row['email'] . '</div>
                        <a href="update.php" class="text-light bg-dark text-center p-2 m-2">UPDATE DETAILS</a>
                    </div>
                 </div>';

            
        }
    } else {
        echo '
                <div class="d-flex justify-content-center">
                    <div class="display-5 text-light bg-danger text-center rounded-2 w-100 p-3">No RECORD FOUND</div>
                </div>
                ';
        
                // sleep(5);

                header("Location: index.php");
                exit;
    }
} catch (mysqli_sql_exception) {
    echo "Unable to Fetch";
}

mysqli_close($conn);

?>


