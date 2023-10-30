<?php

// methods will perform inplace sorting of array

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

$colors = array("red", "green", "blue", "yellow");

echo "before sort>>>>>>>>> <br><pre>";
print_r($colors);
echo "</pre>";

sort($colors);

echo "after sort>>>>>>>>> <br><pre>";
print_r($colors);
echo "</pre>";

?>