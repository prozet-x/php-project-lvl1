<?php

namespace BrainGames\BrainCalc;

const OPERATORS = ['+', '-', '*'];

function makeQuestionAndAnswer()
{
    return function () {
        $a = rand(0, 99);
        $b = rand(0, 99);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $res = ["{$a} {$operator} {$b}"];
        switch ($operator) {
            case '+':
                $res[] = (string) ($a + $b);
                break;
            case '-':
                $res[] = (string) ($a - $b);
                break;
            case '*':
                $res[] = (string) ($a * $b);
        }
        return $res;
    };
}
