<?php
namespace P42;

class CodedTriangleNumbersTest extends \PHPUnit\Framework\TestCase {

    public function testGetCountOfTriangleNumbers()
    {
        $ctn = new CodedTriangleNumbers();
        $ret = $ctn->getCountOfTriangleNumbers();
        self::assertSame(162, $ret);
    }
}
