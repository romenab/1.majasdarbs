<?php
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday.
//Using loop (by your choice) print out every persons personal data.
$persons = [
    [
        "name" => "Anna",
        "surname" => "Ozola",
        "age" => 20,
        "birthday" => "05.01.2004."
    ],
    [
        "name" => "Jānis",
        "surname" => "Priede",
        "age" => 24,
        "birthday" => "01.01.2000."
    ],
    [
        "name" => "Laura",
        "surname" => "Egle",
        "age" => 40,
        "birthday" => "12.12.1983."
    ],
];
foreach ($persons as $person) {
    echo $person["name"] . " " . $person["surname"] . " " . $person["age"] . " " . $person["birthday"] . PHP_EOL;
}
