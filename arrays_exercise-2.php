<?php
$numbers = [20, 30, 25, 35, -16, 60, -100];
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / count($numbers);
echo $average;