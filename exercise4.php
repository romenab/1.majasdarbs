<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10),
//as an int. Take note that it is the same as factorial of N.
$factorial = 1;
for($i = 1; $i <= 10; $i++){
    $factorial *= $i;
}
echo $factorial;