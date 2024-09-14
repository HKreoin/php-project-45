<?php

namespace BrainGames\GCD;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\check;

function run($name): bool
{
    line('Find the greatest common divisor of given numbers.');
    $questionCount = 3;
    for ($i = 0; $i < $questionCount; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);
        $correctAnswer = gcd($num1, $num2);
        line("Question: {$num1} {$num2}");
        $answer = (int)prompt("Your answer: ");
        $check = check($answer, $correctAnswer, $name);
        if (!$check) {
            return false;
        }
    }
    return true;
}

function gcd($num1, $num2): int
{
    $end =  $num1 < $num2 ? $num1 : $num2;

    if ($num1 === $num2 || $end === 1) {
        return $end;
    }

    $result = 1;
    for ($i = $end; $i > 1; $i--) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $result = $i;
        }
    }

    return $result;
}
