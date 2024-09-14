<?php

namespace BrainGames\GCD;

use function cli\line;
use function BrainGames\Engine\check;

function run(string $name): bool
{
    line('Find the greatest common divisor of given numbers.');
    $questionCount = 3;
    for ($i = 0; $i < $questionCount; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);
        $correctAnswer = (string)gcd($num1, $num2);
        $question = "{$num1} {$num2}";

        $check = check($question, $correctAnswer);

        if (!$check) {
            return false;
        }
    }

    return true;
}

function gcd(int $num1, int $num2): int
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
