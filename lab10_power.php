<?php
/*
Name: Mustafa Abdu
Student ID: 2236470
Lab 10 - Task 1: Power function
*/

function power_iterative($base, $exp) {
    if ($exp < 0) return 1 / power_iterative($base, -$exp);

    $result = 1;
    for ($i = 0; $i < $exp; $i++) {
        $result *= $base;
    }
    return $result;
}

function power_recursive($base, $exp) {
    if ($exp == 0) return 1;
    if ($exp < 0) return 1 / power_recursive($base, -$exp);

    return $base * power_recursive($base, $exp - 1);
}

/* Demo */
$base = 2;
$exp  = 5;

echo "Iterative: $base ^ $exp = " . power_iterative($base, $exp) . "<br>";
echo "Recursive: $base ^ $exp = " . power_recursive($base, $exp) . "<br>";
?>
