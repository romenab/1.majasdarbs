<?php
$user = strtoupper(readline("Enter a string: "));
$userLetter = str_split($user);
echo "Switch statement: ";
foreach ($userLetter as $letter) {
    switch ($letter) {
        case "A":
        case "B":
        case "C":
            echo 2;
            break;
        case "D":
        case "E":
        case "F":
            echo 3;
            break;
        case "G":
        case "H":
        case "I":
            echo 4;
            break;
        case "J":
        case "K":
        case "L":
            echo 5;
            break;
        case "M":
        case "N":
        case "O":
            echo 6;
            break;
        case "P":
        case "Q":
        case "R":
        case "S":
            echo 7;
            break;
        case "T":
        case "U":
        case "V":
            echo 8;
            break;
        case "W":
        case "X":
        case "Y":
        case "Z":
            echo 9;
            break;
    }
}
echo PHP_EOL;

echo "Nested-if statement: ";
foreach ($userLetter as $letter) {
    if(!is_numeric($letter)){
        if($letter == "A" || $letter == "B" || $letter == "C"){
            echo 2;
        }elseif ($letter == "D" || $letter == "E" || $letter == "F"){
            echo 3;
        }elseif ($letter == "G" || $letter == "H" || $letter == "I"){
            echo 4;
        }elseif ($letter == "J" || $letter == "K" || $letter == "L"){
            echo 5;
        }elseif ($letter == "M" || $letter == "N" || $letter == "O"){
            echo 6;
        }elseif ($letter == "P" || $letter == "Q" || $letter == "R" || $letter == "S"){
            echo 7;
        }elseif ($letter == "T" || $letter == "U" || $letter == "V"){
            echo 8;
        }elseif ($letter == "W" || $letter == "X" || $letter == "Y" || $letter == "Z"){
            echo 9;
        }
    }
}
