<?php
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight.
//Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
$allFruits = [
    [
        "fruit" => "Apples",
        "weight" => 1
    ],
    [
        "fruit" => "Bananas",
        "weight" => 15
    ],
    [
        "fruit" => "Oranges",
        "weight" => 23
    ]
];
function overTenKg($fruits)
{
    foreach ($fruits as $fruitWeight) {
        if ($fruitWeight["weight"] > 10) {
            return true;
        }
    }
    return false;
}

$shippingCosts = ["0-10" => "Shipping costs 1 euro.", "10+" => "Shipping costs 2 euros."];

foreach ($allFruits as $fruit) {
    echo $fruit["fruit"] . " " . $fruit["weight"] . "kg." . PHP_EOL;
    if(overTenKg([$fruit])){
        echo $shippingCosts["10+"] . PHP_EOL;
    }else{
        echo $shippingCosts["0-10"] . PHP_EOL;

    }
}
