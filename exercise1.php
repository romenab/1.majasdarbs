<?php
//Write a program to accept two integers and return true if the
//either one is 15 or if their sum or difference is 15.

function checkIfTrue($x, $y){
    if ($x == 15 || $y == 15 || $x + $y == 15 || $x - $y == 15 || $y - $x == 15) {
        return true;
    } else {
        return false;
    }
}
$firstInt = 14;
$secondInt = 1;

echo checkIfTrue($firstInt, $secondInt);
