<?php

include("config/database.php");

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

echo "<pre>";
print_r($result);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<pre>";
        print_r($row);
    }
} else {
    echo "Something went wrong";
}
