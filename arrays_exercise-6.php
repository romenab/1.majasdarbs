<?php
$words = ["games", "programming", "computer", "words", "functions"];
function randomWord($words)
{
    $wordIndex = array_rand($words);
    $chosenWord = $words[$wordIndex];
    $letterArray = str_split($chosenWord);
    return $letterArray;
}

function showWord($theWord, $guessedLetters)
{
    $show = "";
    foreach ($theWord as $letter) {
        if (in_array($letter, $guessedLetters)) {
            $show .= $letter;
        } else {
            $show .= "-";
        }
    }
    return $show;
}

do {
    $theWord = randomWord($words);
    $lives = 5;
    $misses = [];
    $guessedLetters = array_fill(0, count($theWord), "-");
    while ($lives > 0 || in_array("-", $guessedLetters)) {
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
        echo "Word: " . showWord($theWord, $guessedLetters) . PHP_EOL;
        echo "Misses: ";
        foreach ($misses as $miss) {
            echo $miss . " ";

        }
        echo PHP_EOL;
        $user = strtolower(readline("Guess: "));
        if (in_array($user, $misses)) {
            echo "You have already guessed '$user'. Try again." . PHP_EOL;
            continue;
        }
        $correctGuess = false;
        for ($i = 0; $i < count($theWord); $i++) {
            if ($user == $theWord[$i]) {
                $guessedLetters[$i] = $user;
                $correctGuess = true;
            }
        }


        if (!$correctGuess) {
            $lives--;
            $misses[] = $user;
        }
        if (!in_array("-", $guessedLetters)) {
            echo "Word: " . showWord($theWord, $guessedLetters) . PHP_EOL;
            echo "Misses: ";
            foreach ($misses as $miss) {
                echo $miss . " ";
            }
            echo PHP_EOL;
            echo "YOU GOT IT!" . PHP_EOL;
            break;
        } elseif ($lives == 0) {
            echo "You lost!" . PHP_EOL;
            break;
        }
    }
    $playAgain = readline("Play 'again' or 'quit'? ");
    $repeat = true;
    if (strtolower($playAgain) != 'again') {
        exit;
    }
} while ($repeat);


