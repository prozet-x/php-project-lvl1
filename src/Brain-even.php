<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

const YES = "yes";
const NO = "no";

function brainEvenGame($name)
{
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
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
