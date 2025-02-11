<?php
include("config/database.php");

$_SESSION["name"] = "Hello Welcome";

if (isset($_POST["submit"])) {
    extract($_POST);
    // echo '<pre>';
    // print_r($_POST);
    // echo $username;
    // echo $_POST["username"];
    // exit;
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO users (username, password, created_at) VALUES ('$username', '$password', '$date')";
    $result = $conn->query($sql);

    if ($result) {
        echo "User has been added successfully";
    } else {
        echo "Something went wrong while adding user please try again";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">

    <h2 style="color: #333;">Register User</h2>

    <form style="display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px;" action="add-user.php" method="post">
        <label for="username" style="display: block; margin-bottom: 5px;">Username:</label>
        <input type="text" id="username" name="username" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

        <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
        <input type="password" id="password" name="password" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

        <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;" name="submit">Add User</button>
    </form>

    <br><br>

    <a style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;" href="users.php">All Users</a>

</body>

</html>