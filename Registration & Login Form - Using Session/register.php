<?php
require 'config.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];


        if($password === $confirm_password) {
            $hasshedPassword = $password;

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";

            if($conn->query($sql) === TRUE) {
                echo "<script> alert('Registration successful'); </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script> alert('Password does not match'); </script>";
        }
    }


    $conn->close();
?>

<!-- HTML CODE -->
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <button type="submit" value="Register">Register</button>
    </form>
   
    <a href="/task3/login.php">Login</a>
</body>
</html>

