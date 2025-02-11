<?php
include("config/database.php");

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM users WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);
    $user = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r($user);
} else {
    echo "<h1>Invalid request</h1>";
    exit;
}

if (isset($_POST["submit"])) {
    extract($_POST);
    // echo '<pre>';
    // print_r($_POST);
    // echo $username;
    // echo $_POST["username"];
    // exit;
    $date = date("Y-m-d H:i:s");
    $sql = "UPDATE users SET username = '$username', password='$password' WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    if ($result) {
        echo "User has been updated successfully";
        echo "<script>window.location.href = 'users.php';</script>";
    } else {
        echo "Something went wrong while updating user please try again";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">

    <h2 style="color: #333;">Update User</h2>

    <form style="display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px;" action="update-user.php?id=<?php echo $user['id'] ?>" method="post">
        <label for="username" style="display: block; margin-bottom: 5px;">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $user['username'] ?>" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

        <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $user['password'] ?>" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

        <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;" name="submit">Update User</button>
    </form>

    <br><br>

    <a style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;" href="users.php">All Users</a>

</body>

</html>