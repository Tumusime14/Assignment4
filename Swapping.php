<?php
$a = 10;
$b = 20;
echo "Original values:\n";
echo "a = " . $a . "\n";
echo "b = " . $b . "\n";
$temp = $a;
$a = $b;
$b = $temp;
echo "Swapped values:\n";
echo "a = " . $a . "\n";
echo "b = " . $b . "\n";
?>
