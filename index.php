<?php

// Indexed Array
// In indexed arrays each item has an index number.
// By default, the first item has index 0, the second item has item 1, etc.
$fruits = array("Apple", "Orange", "Banana", "Mango");

array_push($fruits, "coconut", "pineapple");
array_pop($fruits);
array_shift($fruits);


$reverseFruits = array_reverse($fruits);

echo "<br>";

echo count($reverseFruits);

echo "<br>";

foreach ($reverseFruits as $fruit) {
    echo "$fruit <br>";
}

echo "<br>";

print_r($fruits);
