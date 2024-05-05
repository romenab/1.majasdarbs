<?php
//Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that
//determines count of elements in the array. Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).
$x = [13, 2, 65, 1.01, "55"];
for($i = 0; $i < count($x); $i++) {
    if(is_int($x[$i])) {
        echo double($x[$i]) . PHP_EOL;
    }

}
function double($y){
    return $y * 2;
}

