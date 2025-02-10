<?php

$grade = "G";


switch ($grade) {
    case "A":
        echo "You did good";
        break;
    case "B":
        echo "You are very good";
        break;
    case "C":
        echo "You did Average";
        break;
    case "D":
        echo "You are failed";
        break;
    default:
        echo "$grade grade is undefined";
}
