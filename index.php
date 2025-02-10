<?php

// Multidimensional Arrays
// A multidimensional array is an array containing one or more arrays.
// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep

$students = array(
    array(
        "Name" => "Ali Akbar",
        "Role" => "Software Enginer",
    ),
    array(
        "Name" => "Babar",
        "Role" => "Senior Software Enginer",
    ),
    array(
        "Name" => "Yasir",
        "Role" => "Junior Software Enginer",
    )
);
// print_r($students);
echo "<br><br>";
// print_r(array_keys($employees));
// echo "<br><br>";
// print_r(array_flip($employees));
// echo "<br><br>";
// print_r(array_reverse($employees));
// echo "<br><br>";

foreach ($students as $key => $value) {
    echo "<prev>";
    // print_r($value);
    echo "<br><br>";

    foreach ($value as $k => $v) {
        echo "<br><br>";
        echo $v . "<br>";
    }
}
