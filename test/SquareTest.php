<?php


use Kudr\Square;
use Kudr\KudrException;
use PHPUnit\Framework\TestCase;

final class SquareTest extends TestCase {

    public function testSolve() {
        $result = new Square();

        //0x^2+4x+2=0
        $this->assertEquals(
            [-0.5],
            $result->solve(0,4,2)
        );

        // 4x^2+2x+0=0
        $this->assertEquals(
            [-0.5, 0],
            $result->solve(4, 2, 0)
        );

        // 2x^2+4x+0=0
        $this->assertEquals(
            [-2, 0],
            $result->solve(2, 4, 0)
        );

        //0x^2+0x+8=0
        $this->expectException(KudrException::class);
        $result->solve(0,0,8);

        //Дискриминант < 0
        $this->expectException(KudrException::class);
        $result->solve(1,-4,8);
    }
}
