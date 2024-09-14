<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\check;

function run($name)
{
    line("What is the correctAnswer of the expression?");

    $operations = ['+', '-', '*'];
    $lastIndex = count($operations) -1;

    $questionCount = 3;


    for ($i = 0; $i < $questionCount; $i++) {
        $num1 = random_int(1,100);
        $num2 = random_int(1,100);
        $operator = $operations[random_int(0, $lastIndex)];
        $correctAnswer = match($operator) {
            '+' => $num1 + $num2,
            '-' => $num1 - $num2,
            '*'=> $num1 * $num2
        };

        line("Question: {$num1} {$operator} {$num2}");
        $answer = (int)prompt("Your answer: ");
        $check = check($answer, $correctAnswer, $name);

        if (!$check) {
            return false;
        }
    }

    return true;
}