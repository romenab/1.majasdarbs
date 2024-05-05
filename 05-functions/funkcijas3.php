<?php
// Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.
function adult($x)
{
    if ($x->age >= 18) {
        return "The person has reached the age of 18.";
    } else {
        return "The person has not reached the age of 18.";
    }
}

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 18;

echo adult($person);
