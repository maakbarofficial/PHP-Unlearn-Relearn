<?php

$name = "aasim";

echo "<h1>".strlen($name)."</h1>";

echo "<br><br>";

echo str_replace("w", "A", $name);

echo "<br><br>";

echo ucwords($name);

echo "<br><br>";

echo strtoupper($name);

echo "<br><br>";

$num = "10";

echo var_dump(is_int($num));

echo "<br><br>";

echo pi();

echo "<br><br>";

echo abs(-22);

echo "<br><br>";

echo sqrt(2);

echo "<br><br>";

echo round(2.27635);

?>