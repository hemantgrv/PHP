<?php

$conn = mysqli_connect("localhost", "root", "", "crud_operations");

if ($conn->connect_error) 
{
    die("Connection failed");
}

?>