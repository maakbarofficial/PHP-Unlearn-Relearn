<?php

include("config/database.php");

$sql = "UPDATE users SET username='Ali' where id=2";

$result = $conn->query($sql);

echo "<pre>";
// print_r($result);

if ($result) {
    echo "Updated successfully";
} else {
    echo "Something went wrong";
}
