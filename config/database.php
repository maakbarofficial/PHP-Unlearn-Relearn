<?php
session_start();
$server = "localhost";
$username = "root";
$password = "root";
$db = "testdb";

try {
    $conn = @new mysqli($server, $username, $password, $db);
} catch (mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
