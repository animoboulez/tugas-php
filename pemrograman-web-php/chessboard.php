<?php

    $chessboard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R'),
    );

    for ($a = 0; $a < 8; $a++) {
        for ($b = 0; $b < 8; $b++) {
            $char = $chessboard[$a][$b];

            if ($a < 2 || $a > 5) {
                switch ($char) {
                    case 'r':
                        echo 'R';
                        break;
                    case 'n':
                        echo 'N';
                        break;
                    case 'b':
                        echo 'B';
                        break;
                    case 'q':
                        echo 'Q';
                        break;
                    case 'k':
                        echo 'K';
                        break;
                    case 'p':
                        echo 'P';
                        break;
                    default:
                        echo ' ';
                        break;
                }
            } else {
                echo ' ';
            }
        }
        echo "\n";
    }
?>