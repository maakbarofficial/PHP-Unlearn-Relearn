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
            <label>Select any course:</label><br>
            <input type="radio" name="course" value="PE">PE<br>
            <input type="radio" name="course" value="PM">PM<br>
            <input type="radio" name="course" value="CS">CS<br>
        </div>
        <br>
        <div>
            <button type="submit" name="submit" value="Confirm">Submit</button>
        </div>
    </form>

    <br>

    <a href="./index.php">Home</a>

    <br>
    <br>

    <?php
    if (isset($_POST['course'])) {
        echo "<pre>";
        // print_r($_POST);
        // exit;
        $course = null;
        if (isset($_POST["course"])) {
            $course = $_POST["course"];
        }

        if ($course == "PE") {
            echo "You have selected Pre Engineering Course";
        } else if ($course == "CS") {
            echo "You have selected Computer Science Course";
        } else {
            echo "You have selected Pre Medical Course";
        }
    }


    ?>
</body>

</html>