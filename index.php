<?php

// Function
function myFun()
{
    echo "Welcome from my fun <br>";
}

myFun();


function sum($a, $op, $b)
{
    if ($op == "+") {
        return "<h1>" . $a + $b . "</h1><br>";
    } else if ($op == "-") {
        return "<h1>" . $a - $b . "</h1><br>";
    }
}

echo (sum(2, "-", 5));
