<?php

include("config/database.php");

$date = date("Y-m-d H:i:s");
$sql = "INSERT into users (username, password, created_at) values ('Wasim', 'Pass123', '$date')";

$result = $conn->query($sql);

if ($result) {
    echo "New record created";
} else {
    echo "Something went wrong error :" . $conn->error;
}
