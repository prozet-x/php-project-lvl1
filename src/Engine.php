<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_QUESTIONS = 3;

function Engine($name, $rules, $questionFunc)
{
    line($rules);
    for ($i = 1; $i <= MAX_QUESTIONS; $i++) {
        $num = rand(0, 99);
        $rightAnswer = $num % 2 === 0 ? YES : NO;
        $answer = prompt("Question: {$num}: ");
        if ($answer != $rightAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
