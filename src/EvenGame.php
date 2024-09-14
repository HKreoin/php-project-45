<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function run($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randomNum = random_int(1, 100);
        $even = $randomNum % 2;
        $correctAnswer = $even === 0 ? 'yes' : 'no';
        line("Question: {$randomNum}");
        $answer = prompt("Your answer: ");
        if ($correctAnswer === $answer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
