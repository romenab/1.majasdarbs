<?php
$number = (int)readline("Enter the number: ");
if ($number < 0) {
    echo "$number is negative";
}else{
    $number = strval(strlen($number));
    echo $number;
}
