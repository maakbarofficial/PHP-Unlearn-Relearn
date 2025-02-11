<?php
include("config/database.php");

if (isset($_GET['id'])) {
    extract($_GET);
    $sql = "DELETE FROM users WHERE id=" . $id;
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION["success"] = "User deleted successfully";
    }
} else {
    $_SESSION["error"] =  "<h1>Invalid request</h1>";
    exit;
}

header("LOCATION: users.php");
