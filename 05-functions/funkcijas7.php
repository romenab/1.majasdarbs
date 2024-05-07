<?php
$person = new stdClass();
$person->name = "John Doe";
$person->license = ["ABC", "DEF", "GHI"];
$person->cash = 1000;

$gun1 = new stdClass();
$gun1->name = "pistol";
$gun1->license = "ABC";
$gun1->price = 3000;

$gun2 = new stdClass();
$gun2->name = "sniper";
$gun2->license = "JKL";
$gun2->price = 1000;

$gun3 = new stdClass();
$gun3->name = "shotgun";
$gun3->license = "DEF";
$gun3->price = 500;

$guns = [$gun1, $gun2, $gun3];

function buyGun($person, $guns)
{
    if (in_array($guns->license, $person->license) && $guns->price <= $person->cash) {
        return true;
    } else {
        return false;
    }
}
foreach ($guns as $gun) {
    if (buyGun($person, $gun)) {
        echo $person->name . " can buy a " . $gun->name . PHP_EOL;
    } else {
        echo $person->name . " can't buy a " . $gun->name . PHP_EOL;
    }
}
