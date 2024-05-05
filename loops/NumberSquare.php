<?php

class NumberSquare
{
    public function game()
    {
        do {
            $min = readline("Min? ");
            $max = readline("Max? ");
        } while (!is_numeric($min) || !is_numeric($max));

        for ($row = $min; $row <= $max; $row++) {
            for ($i = $row; $i <= $max; $i++) {
                echo $i;
            }
            for ($j = $min; $j < $row; $j++) {
                echo $j;
            }
            echo PHP_EOL;
        }
    }
}

$game = new NumberSquare();
$game->game();
