<?php
$firstArray = [];
$size = 10;
$min = 1;
$max = 100;
for ($i = 0; $i < $size; $i++) {
    $firstArray[] = rand($min, $max);
}
$secondArray = $firstArray;

$firstArray[$size - 1] = -7;
echo "Array 1: ";
for ($j = 0; $j < $size; $j++) {
    echo $firstArray[$j] . " ";
}
echo PHP_EOL;
echo "Array 2: ";
for ($x = 0; $x < $size; $x++) {
    echo $secondArray[$x] . " ";
}
