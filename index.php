<?php

// The empty() function checks whether a variable is empty or not.
// This function returns false if the variable exists and is not empty, otherwise it returns true.
// The following values evaluates to empty:
// 0
// 0.0
// "0"
// ""
// NULL
// FALSE
// array()

// The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
// This function returns true if the variable exists and is not NULL, otherwise it returns false.
// Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.
// Tip: A variable can be unset with the unset() function.

$name = null;

if (isset($name)) {
    echo "Name is SET";
} else {
    echo "Name is not SET";
}

echo "<br><br>";

if (empty($name)) {
    echo "Name is SET";
} else {
    echo "Name is not SET";
}
