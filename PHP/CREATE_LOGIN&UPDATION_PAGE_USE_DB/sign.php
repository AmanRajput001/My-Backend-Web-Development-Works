<?php session_start() ?>

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
    <div class="d-flex justify-content-center m-2">
        <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" class="card flex-column align-items-center form w-50 p-3 bg-dark rounded-5">
            <div class="display-5 text-light bg-primary text-center fw-bold rounded-5 rounded-bottom w-100 p-3">Sign In</div>
            <input type="text" placeholder="Enter User Name" name="username" class="form-control m-2" />
            <input type="text" placeholder="Enter password" name="password" class="form-control m-2" />
            <input type="text" placeholder="Enter Email" name="email" class="form-control m-2" />
            <input name="submit" type="submit" class="btn btn-primary m-2 mb-0 fw-bold">Submit</input>
            <hr class="text-light w-100">
            <a href="index.php" class="text-end text-light m-2">LOGIN IN</a>
        </form>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            if (!(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"]))){
                if (empty(filter_input(INPUT_POST, '$_POST["email"]' , FILTER_VALIDATE_EMAIL))) {
                    echo '
                    <div class="d-flex justify-content-center">
                        <div class="display-5 text-light bg-success text-center rounded-2 w-100 p-3">Signin Succesfull.</div>
                    </div>
                ';
                    $_SESSION['username'] = filter_var($_POST["username"] , FILTER_SANITIZE_SPECIAL_CHARS);
                    $_SESSION['password'] = filter_var($_POST["password"] , FILTER_SANITIZE_SPECIAL_CHARS);
                    $_SESSION['email'] = filter_var($_POST["email"] , FILTER_SANITIZE_EMAIL);
                    header("Location: insert.php");
                } else {
                    echo '
                    <div class="d-flex justify-content-center">
                        <div class="display-5 text-light bg-danger text-center rounded-2 w-100 p-3">Please Fill Correct Email.</div>
                    </div>
                ';
                }
            } else {
                echo '
                <div class="d-flex justify-content-center">
                    <div class="display-5 text-light bg-danger text-center rounded-2 w-100 p-3">Please Fill all details to login.</div>
                </div>
            ';
            }
        }
    }
    ?>
</body>

</html>