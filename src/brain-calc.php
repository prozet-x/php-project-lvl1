<?php

namespace BrainGames\BrainCalc;

const OPERATORS = ['+', '-', '*'];

function makeQuestionAndAnswer()
{
    $a = rand(0, 99);
    $b = rand(0, 99);
    $operator = OPERATORS[array_rand(OPERATORS)];
    switch
}
