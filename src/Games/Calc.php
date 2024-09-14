<?php

namespace BrainGames\Calc;

use function cli\line;
use function BrainGames\Engine\check;

function run(string $name): bool
{
    line("What is the result of the expression?");

    $operations = ['+', '-', '*'];
    $lastIndex = count($operations) - 1;

    $questionCount = 3;


    for ($i = 0; $i < $questionCount; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);
        $operator = $operations[random_int(0, $lastIndex)];
        $correctAnswer = (string)match ($operator) {
            '+' => $num1 + $num2,
            '-' => $num1 - $num2,
            '*'=> $num1 * $num2
        };

        $question = "{$num1} {$operator} {$num2}";

        $check = check($question, $correctAnswer);

        if (!$check) {
            return false;
        }
    }

    return true;
}
