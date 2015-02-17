<?php
namespace P42;

class CodedTriangleNumbersTest extends \PHPUnit_Framework_TestCase {

    public function testGetCountOfTriangleNumbers()
    {
        $ctn = new CodedTriangleNumbers();
        $ret = $ctn->getCountOfTriangleNumbers();
        $this->assertSame(162, $ret);
    }
}
