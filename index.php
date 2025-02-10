<?php

// Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them

$employees = array(
    "Akbar" => "Software Enginer",
    "Babar" => "Web Developer",
    "Ali" => "JavaScript Developer"
);
print_r(array_values($employees));
echo "<br><br>";
print_r(array_keys($employees));
echo "<br><br>";
print_r(array_flip($employees));
echo "<br><br>";
print_r(array_reverse($employees));
echo "<br><br>";

?>

<?php
foreach ($employees as $key => $value) {
?>
    <p><b><?php echo $key ?>: </b><?php echo $value ?></p>
<?php } ?>