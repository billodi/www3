<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nibm";

// Create connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>