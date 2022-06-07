<?php

namespace BrainGames\BrainEven;

function makeQuestionAndAnswer()
{
    return function () {
        $res = [rand(0, 99)];
        $res[] = $res[0] % 2 === 0 ? "yes" : "no";
        return $res;
    };
}
