<?php
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that its your car in case of your number.
$plateNumber = "AB1234";
switch ($plateNumber) {
    case "AB1234":
        echo "This is your car plate number: $plateNumber";
        break;
    default:
        echo "This is not your car plate number: $plateNumber";
        break;
}
