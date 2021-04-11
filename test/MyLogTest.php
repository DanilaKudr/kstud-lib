<?php


use Kudr\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{
    public function testMyLog():void {
        $this->expectOutputString("Hello, World!\r\n");
        MyLog::log("Hello, World!");
        MyLog::write();
    }

    public function testInstance(): void {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());

    }

}
