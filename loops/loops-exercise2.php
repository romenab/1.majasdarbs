<?php
$input = (int)readline("Input number of terms: ");
$i = 1;
for($x = 0; $x < $input; $x++) {
    $i *= $input;
}
echo $i;
