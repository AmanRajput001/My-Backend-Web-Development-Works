<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="User Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])){
                // Sanitization
                $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);            
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $password = $_POST["password"];
                
                echo "Sanitized: " . $username . " " . $email . " " . $password;
                echo "<br><hr>";

                // Validation           
                $email_validated = filter_var($email, FILTER_VALIDATE_EMAIL);
                $password_validated = !empty($password);
                if($email_validated && $password_validated){
                    echo "Validated: " . $email_validated . " " . $password_validated;
                } else {
                    echo "Validation failed!";
                }
            }
        }
    ?>
</body>
</html>
