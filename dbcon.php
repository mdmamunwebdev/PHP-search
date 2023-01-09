<?php

// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "php_search";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}