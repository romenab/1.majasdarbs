<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$value = readline("Enter the value to search for: ");
foreach ($numbers as $number) {
    if ($number == $value) {
        echo "This array contains a value you have entered.";
        break;
    } else {
        echo "This array does not contain a value you have entered.";
        break;
    }
}