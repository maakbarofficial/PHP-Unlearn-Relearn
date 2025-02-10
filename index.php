<?php

$temprature = 45;
$cloudy = true;

if($temprature > 0 && $temprature < 30){
    echo "Temp is good";
} else {
    echo "Temp is not good";
}

echo "<br><br>";

if(!$cloudy){
    echo "Temp is good it's cloudy";
} else {
    echo "Temp is not good, it's not cloudy";
}