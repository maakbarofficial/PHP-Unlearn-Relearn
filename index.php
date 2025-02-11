<?php
// PHP Global Variables - Superglobals
// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
// The PHP superglobal variables are:
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

// echo "<pre>";
// print_r($_GET);
// exit;

if (isset($_POST["submit"])) {
    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";

    if (empty($_POST["username"])) {
        echo "Username is empty";
    } else {
        echo "Username is not empty";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobals</title>
</head>

<body>
    <form action="index.php" method="post">
        <div>
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Log In</button>
        </div>
    </form>


    <br>
    <br>
    <br>

    <a href="./index.php">Home</a>
</body>

</html>