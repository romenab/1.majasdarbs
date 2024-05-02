<?php
$firstWord = readline("Enter first word: ");
$secondWord = readline("Enter second word: ");
$wordsLength = strlen($firstWord) + strlen($secondWord);
$totalLength = 30;
echo $firstWord;
for ($i = 0; $i < $totalLength - $wordsLength; $i++) {
    echo ".";
}
echo $secondWord;
