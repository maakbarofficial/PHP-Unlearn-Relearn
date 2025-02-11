<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "testdb";

$conn = @new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else {
//     echo "Connected Successfully";
// }
