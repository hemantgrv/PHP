<?php
session_start();
require 'config/dbcon.php';

if (!isset($_SESSION['login'])) 
{
    header("Location: success.php");
    exit();
}

$id = $_SESSION['id'];

$query = mysqli_query($conn, "SELECT name FROM users WHERE id = $id");
$query_run = mysqli_fetch_assoc($query);
$name = $query_run['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h2>Welcome,
        <?php echo htmlspecialchars($name); ?>!
    </h2>
    <p>You have successfully logged in.</p>
</body>

</html>