<?php

namespace BrainGames\Progression;

use function cli\line;
use function BrainGames\Engine\check;

function run(string $name): bool
{
    line("What number is missing in the progression?");
    $questionCount = 3;

    for ($i = 0; $i < $questionCount; $i++) {
        $array = generateArray();
        $deletedIndex = rand(0, count($array) - 1);
        $correctAnswer = (string)$array[$deletedIndex];
        $array[$deletedIndex] = '..';
        $question = implode(' ', $array);
        $check = check($question, $correctAnswer);

        if (!$check) {
            return false;
        }
    }

    return true;
}

function generateArray(): array
{
    $step = rand(1, 10);
    $start = rand(1, 100);
    $size = rand(5, 10);
    $end = $start + $size * $step;

    return range($start, $end, $step);
}
