<?php
//Write a program called CheckOddEven which prints "Odd Number"
//if the int variable “number” is odd, or “Even Number” otherwise.
//The program shall always print “bye!” before exiting.
function checkOddEven($x){
    if($x % 2 == 0){
        return "Even Number ";
    }else{
        return "Odd Number ";
    }
}
$y = 11;
echo checkOddEven($y);
echo "bye!";
