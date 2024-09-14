<?php

namespace BrainGames\Prime;

use function cli\line;
use function BrainGames\Engine\check;

function run($name): bool
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $questionCount = 3;

    for ($i = 0; $i < $questionCount; $i++) {
        $num = rand(0, 100);
        $answer = isPrime($num) ? 'yes' : 'no';
        $check = check($num, $answer);

        if (!$check) {
            return false;
        }
    }

    return true;
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
