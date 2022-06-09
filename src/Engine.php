<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_QUESTIONS = 3;

function playGame(string $name, string $rules, $makeQuestionAndAnswer)
{
    line($rules);
    for ($i = 1; $i <= MAX_QUESTIONS; $i++) {
        $qA = $makeQuestionAndAnswer();
        $question = $qA[0];
        $rightAnswer = $qA[1];
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer != $rightAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
