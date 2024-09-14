<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\check;

function run($name): bool
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $questionCount = 3;
    for ($i = 0; $i < $questionCount; $i++) {
        $randomNum = random_int(1, 100);
        $even = $randomNum % 2;
        $correctAnswer = $even === 0 ? 'yes' : 'no';
        line("Question: {$randomNum}");
        $answer = prompt("Your answer: ");
        $check = check($answer, $correctAnswer, $name);
        if (!$check) {
            return false;
        }
    }
    return true;
}
