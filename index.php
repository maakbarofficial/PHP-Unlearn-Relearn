<?php

$temprature = 12;


if ($temprature >= 23) {
    echo "Weather is normal";
} else {
    echo "Weather is good";
}

echo "<br><br>";

$age = 18;

if ($age >= 18) {
    echo "You can vote";
} else {
    echo "You cannot vote";
}

echo "<br><br>";

$hrs = 50;
$rate = 10;
$weekPay = 0;

if ($hrs <= 0) {
    $weekPay = 0;
} else if ($hrs <= 40) {
    $weekPay = $hrs * $rate;
} else {
    $weekPay = ($hrs * $rate) + (($hrs - 40) * $rate);
}

echo "Your weekly payout is $weekPay $";
