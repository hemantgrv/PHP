<?php
session_start();

include("config/dbcon.php");

if(isset($_POST['addUser'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $user_query = "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
    $user_query_run = mysqli_query($conn, $user_query);

    if ($user_query_run) 
    {
        $_SESSION['status'] = "User added successfully";
        header("Location: admin.php");
    }
    else 
    {
        $_SESSION['status'] = "User registration failed";
        header("Location: admin.php");
    }
}

if(isset($_POST['registerUser'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $user_query = "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
    $user_query_run = mysqli_query($conn, $user_query);

    if ($user_query_run) 
    {
        $_SESSION['status'] = "User registered successfully";
        header("Location: registered.php");
    }
    else 
    {
        $_SESSION['status'] = "User registration failed";
        header("Location: registered.php");
    }
}

if (isset($_POST['updateUser'])) 
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $query = "UPDATE users SET name='$name', email='$email', phone='$phone', password='$password' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['status'] = "User updated successfully";
        header("Location: admin.php");
    }
    else 
    {
        $_SESSION['status'] = "User updating failed";
        header("Location: admin.php");
    }
}


if (isset($_POST['deleteBtn'])) 
{
    $user_id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id= '$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) 
    {
        $_SESSION['status'] = "User deleted successfully";
        header("Location: admin.php");
    }
    else 
    {
        $_SESSION['status'] = "User deleting failed";
        header("Location: admin.php");
    }
}

?>