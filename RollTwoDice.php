<?php

class RollTwoDice
{
    public function game()
    {
        do {
            $userNumber = (int)readline("Desired sum (2-12): ");
        } while ($userNumber < 2 || $userNumber > 12);
        do {
            $diceOne = rand(1, 6);
            $diceTwo = rand(1, 6);
            $diceSum = $diceOne + $diceTwo;
            echo "$diceOne and $diceTwo = $diceSum" . PHP_EOL;
        } while ($diceSum != $userNumber);
    }
}

$game = new RollTwoDice();
$game->game();