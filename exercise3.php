<?php
//Write a program to produce the sum of 1, 2, 3, ..., to 100.
//Store 1 and 100 in variables lower bound and upper bound,
//so that we can change their values easily.
//Also compute and display the average. The output shall look like:
//The sum of 1 to 100 is 5050
//The average is 50.5
$sum = 0;
$upper_bound = 100;
for ($lower_bound = 1; $lower_bound <= $upper_bound; $lower_bound++) {
    $sum += $lower_bound;
}
$average = $sum / 100;
echo $sum . PHP_EOL;
echo $average;
