<?php

class Piglet
{
    public function game()
    {

        echo "Welcome to Piglet!" . PHP_EOL;
        $points = 0;
        while (true) {
            $randomNumber = rand(1, 6);
            echo "You rolled a $randomNumber!" . PHP_EOL;
            if ($randomNumber > 1 && $randomNumber <= 6) {
                $points += $randomNumber;
                while (true) {
                    $again = strtolower(readline("Roll again? "));
                    if ($again == "yes" || $again == "y") {
                        break;
                    } elseif ($again == "no" || $again == "n") {
                        echo "You got $points points!";
                        exit;
                    } else {
                        echo "Invalid input. Please enter 'yes' or 'no'. " . PHP_EOL;
                    }
                }
            } elseif ($randomNumber == 1) {
                echo "You got 0 points!";
                break;
            }
        }
    }
}
$game = new Piglet();
$game->game();
