<?php
function display_board($board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]}\n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]}\n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]}\n";
}

function winner($board, $xo)
{
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] == $xo && $board[$i][1] == $xo && $board[$i][2] == $xo) {
            return true;
        }
    }
    for ($j = 0; $j < 3; $j++) {
        if ($board[0][$j] == $xo && $board[1][$j] == $xo && $board[2][$j] == $xo) {
            return true;
        }
    }
    if ($board[0][0] == $xo && $board[1][1] == $xo && $board[2][2] == $xo) {
        return true;
    }
    if ($board[0][2] == $xo && $board[1][1] == $xo && $board[2][0] == $xo) {
        return true;
    }
    return false;
}
function tie($board)
{
    {
        foreach ($board as $row) {
            foreach ($row as $box) {
                if ($box == " ") {
                    return false;
                }
            }
        }
        return true;
    }
}

$board = [[" ", " ", " "], [" ", " ", " "], [" ", " ", " "]];
display_board($board);
function game(&$board, $xo)
{
    while (true) {
        $column = (int)readline("'$xo', choose your location - column (1-3): ");
        $row = (int)readline("'$xo', choose your location - row (1-3): ");
         if ($column < 1 || $column > 3 || $row < 1 || $row > 3) {
             echo "Invalid input. Try again!" . PHP_EOL;
             continue;
         }
        if ($board [$row - 1][$column - 1] != " ") {
            echo "This box is already taken, choose another one!" . PHP_EOL;
            continue;
        }

        break;
    }
    $board [$row - 1][$column - 1] = "$xo";
    display_board($board);
    if (winner($board, $xo)) {
        echo "'$xo' wins!!!";
        return true;
    }
    if (tie($board)) {
        echo "The game is a tie!!!";
        return true;
    }
    return false;
}

while (true) {
    if (game($board, "O")) {
        break;
    };
    if (game($board, "X")) {
        break;
    };
}

