<?php
//Create an array of objects that uses the function of exercise 3 but
//in loop printing out if the person has reached age of 18.
function adult($x)
{
    if ($x >= 18) {
        return "The person has reached the age of 18." . PHP_EOL;
    } else {
        return "The person has not reached the age of 18." . PHP_EOL;
    }
}

$persons = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 18
    ],
    [
        "name" => "Anna",
        "surname" => "Smith",
        "age" => 24
    ],
    [
        "name" => "Jane",
        "surname" => "Roberts",
        "age" => 10
    ]
];
foreach ($persons as $person) {
    echo adult($person["age"]);
}