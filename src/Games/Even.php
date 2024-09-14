<?php

namespace BrainGames\Even;

use function cli\line;
use function BrainGames\Engine\check;

function run(string $name): bool
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $questionCount = 3;
    for ($i = 0; $i < $questionCount; $i++) {
        $randomNum = random_int(1, 100);
        $even = $randomNum % 2;
        $correctAnswer = $even === 0 ? 'yes' : 'no';

        $check = check((string)$randomNum, $correctAnswer);

        if (!$check) {
            return false;
        }
    }
    return true;
}
