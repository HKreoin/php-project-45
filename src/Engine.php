<?php

namespace BrainGames\Engine;

use function cli\line;

function check($answer, $correctAnswer, $name): bool
{
    if ($correctAnswer === $answer) {
        line("Correct!");
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        return false;
    }
}
