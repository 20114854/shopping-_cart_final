<?php


//params to connect to the database

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "@Dvtech123!";
$dbName = "bookstore";

//connect to database

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$conn) {
    die ("Database connection failed!");
}

?>