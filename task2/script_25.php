<?php

$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b<br>";


$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping: a = $a, b = $b";

?>