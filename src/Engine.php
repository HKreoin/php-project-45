<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function check($question, $correctAnswer): bool
{
    line("Question: {$question}");
    $answer = prompt("Your answer: ");
    if ($correctAnswer === $answer) {
        line("Correct!");
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        return false;
    }
}
