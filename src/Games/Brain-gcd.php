<?php

namespace BrainGames\BrainGCD;

function makeQuestionAndAnswer()
{
    return function () {
        $a = rand(1, 1000);
        $b = rand(1, 1000);
        $res = ["{$a} {$b}"];

        while ($a != $b) {
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }

        $res[] = $a;
        return $res;
    };
}
