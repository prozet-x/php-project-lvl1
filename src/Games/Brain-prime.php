<?php

namespace BrainGames\BrainPrime;

function makeQuestionAndAnswer()
{
    return function () {
        $res = [rand(2, 1000000)];
        if ($res[0] == 2) {
            $res[] = 'yes';
            return $res;
        }

        $border = (int) round($res[0] / 2);
        for ($i = 3; $i <= $border; $i += 2) {
            if ($res[0] % $i == 0) {
                $res[] = 'no';
                return $res;
            }
        }

        $res[] = 'yes';
        return $res;
    };
}
