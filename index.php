<?php
include("config/database.php");
include("debugger.php");

if (isset($_POST["submit"])) {
    extract($_POST);
    $pass = md5($password);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $result = $conn->query($sql);
    debug($result);
    debug(mysqli_num_rows($result));

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['is_user_loggedin'] = true;
        $_SESSION['user_data'] = $user;
        header("Location: users.php");
    } else {
        $_SESSION['error'] = "Invalid login info";
    }
}
?>
<?php
$pageTitle = "Login Form";
include("header.php");
?>
<?php include("include/alert.php") ?>
<h2 style="color: #333;">Login User</h2>
<form style="display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px;" method="post">
    <label for="username  " style="display: block; margin-bottom: 5px;">Username:</label>
    <input type="text" id="username" name="username" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

    <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
    <input type="password" id="password" name="password" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

    <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;" name="submit">Login</button>
</form>
</body>

</html>