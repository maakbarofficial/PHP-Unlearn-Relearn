<?php

$str = "Hello <br>";

for ($i = 0; $i < 10; $i++) {
    echo "$i " . $str;
}

echo "<br><br>";

$n = 1;

while ($n <= 10) {
    echo "$n <br>";
    $n++;
}

echo "Out of loop";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>

<body>

    <h1>One way of loop</h1>

    <!-- $i = 1;

    echo "<h1>While loop</h1>";

    while ($i <= 10) {
     echo "<p>This is $i</p>";
        $i++;
    } -->

    <?php
    $i = 1;
    while ($i <= 10) {
        $i++;
    ?>
        <h1>Loop in a different way</h1>
        <p><?php echo "This is loop $i" ?></p>

    <?php } ?>

</body>

</html>