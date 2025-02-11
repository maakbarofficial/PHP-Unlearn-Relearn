<?php
include("config/database.php");

if (isset($_GET['id'])) {
    extract($_GET);
    $sql = "DELETE FROM users WHERE id=" . $id;
    $result = $conn->query($sql);
    if ($result) {
        echo "User deleted successfully";
        echo "<script>window.location.href = 'users.php';</script>";
    }
} else {
    echo "<h1>Invalid request</h1>";
    exit;
}
