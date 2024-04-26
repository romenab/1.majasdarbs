<?php
//Create a non associative array with integers and printout
//only integers that divides by 3 without any left.

$x = [3, 5, 6, 7, 9, 10, 12];
for($i = 0; $i < count($x); $i++){
    if($x[$i] % 3 === 0){
        echo $x[$i] . " ";
    }
}
