<?php

namespace BrainGames\BrainProgression;

function makeQuestionAndAnswer()
{
    return function () {
        $start = rand(1, 20);
        $step = rand(1, 7);
        $count = rand(5, 10);
        $emptyPos = rand(1, $count);
        $res = [[]];
        for ($i = 1; $i <= $count; $i++) {
            if ($i == $emptyPos) {
                $res[0][] = '..';
                $res[] = $start + ($i - 1) * $step;
            } else {
                $res[0][] = $start + ($i - 1) * $step;
            }
        }
        $res[0] = implode(' ', $res[0]);
        return $res;
    };
}
