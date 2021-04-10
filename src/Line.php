<?php

namespace Kudr;

class Line
{

    public function Line($a, $b)
    {
        if ($a == 0) {
            throw new KudrException('The equation does not have exist');
        }
        return $this->X1 = [($b * -1) / $a];
    }
}