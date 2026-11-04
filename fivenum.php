<?php
// Five numbers
$num1 = 15;
$num2 = 42;
$num3 = 89;
$num4 = 23;
$num5 = 7;

// Assume the first number is the largest
$largest = $num1;

// Compare with other numbers using if statements
if ($num2 > $largest) {
    $largest = $num2;
}

if ($num3 > $largest) {
    $largest = $num3;
}

if ($num4 > $largest) {
    $largest = $num4;
}

if ($num5 > $largest) {
    $largest = $num5;
}

// Print the result
echo "The largest number is: " . $largest;
?>