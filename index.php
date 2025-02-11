<?php

// Database Connection
// MySQLi - works with MySQL
// PDO (PHP Data Object) - works with 12 different databases


// OOP Way
$server = "localhost";
$username = "root";
$password = "root";
$db = "testdbb";

// //Create Connection
// $conn = new mysqli($server, $username, $password, $db);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     exit;
// }

// echo "Connection Successfully";

// Procedural Way


//Create Connection
$conn = @mysqli_connect($server, $username, $password, $db);

// echo "<pre>";
// print_r($conn);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<h1>Connection Successfully</h1>";
}
