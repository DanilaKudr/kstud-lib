<?php

namespace Kudr;

class Line
{

    public function Line($a, $b)
    {
        if ($a == 0) {
            throw new KudrException('The equation does not have exist');
        }
        MyLog::log("This is linear equation\n");
        MyLog::log('Roots: ');
        MyLog::log(-($b / $a));
    }
}