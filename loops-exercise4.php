<?php
$maxValue = (int)readline("Max value? ");
$count = 0;
for ($i = 1; $i <= $maxValue; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
    $count++;
    if ($count % 20 == 0) {
        echo PHP_EOL;
    }
}
