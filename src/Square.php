<?php

namespace Kudr;

use core\EquationInterface;

class Square extends Line implements EquationInterface
{
    public function solve($a, $b, $c): array
    {
        if ($a == 0) {
            return parent::line($b, $c);
        }
        $D = $this->searchD($a, $b, $c);
        if ($D > 0) {
            return $this->x = [(-$b - sqrt($D)) / (2 * $a), (-$b + sqrt($D)) / (2 * $a)];
        }
        if ($D == 0) {
            return $this->x = [(-$b - sqrt($D) / (2 * $a))];

        }
        if ($D < 0 ){
            throw new KirillExeption('The equation does not have solution');
        }
    }

    protected function searchD($a, $b, $c)
    {
        $D = $b * $b - 4 * $a * $c;
        return $D;
    }
}