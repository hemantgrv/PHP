<?php

require 'config.php';

    if(isset($_POST["submit"])) {
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["password"]) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("location: index.php");
                
            } else {
                echo "<script> alert('Wrong password'); </script>";;
            }
            
        } else {
            echo "<script> alert('User not registered'); </script>";;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <h2>Login</h2>
    <form method="post" autocomplete="off">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Login</button>
    </form>

    <br>

    <a href="/task3/register.php">Registration</a>
</body>
</html>