<?php

include("config/database.php");

$sql = "DELETE FROM users where id=2";

$result = $conn->query($sql);

echo "<pre>";
// print_r($result);

if ($result) {
    echo "Deleted successfully";
} else {
    echo "Something went wrong";
}
