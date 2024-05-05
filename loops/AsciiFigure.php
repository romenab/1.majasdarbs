<?php

class AsciiFigure
{
    const NUMBER = 5;

    public function game()
    {
        $firstElement = "////";
        $secondElement = "*";
        $thirdElement = "\\\\\\\\";
        if (self::NUMBER == 1) {
            echo $firstElement . $thirdElement;
        } else {
            for ($row = 0; $row < self::NUMBER; $row++) {
                for ($i = 0; $i < self::NUMBER - $row - 1; $i++) {
                    echo $firstElement;
                }
                for ($j = 0; $j < $row * 8; $j++) {
                    echo $secondElement;
                }
                for ($x = 0; $x < self::NUMBER - $row - 1; $x++) {
                    echo $thirdElement;
                }
                echo PHP_EOL;
            }
        }
    }
}

$asciiFigure = new AsciiFigure();
$asciiFigure->game();
