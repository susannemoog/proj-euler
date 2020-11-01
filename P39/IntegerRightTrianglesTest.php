<?php
namespace P39;

class IntegerRightTrianglesTest extends \PHPUnit\Framework\TestCase {

    public function testGetMostTrianglesPerPerimeter()
    {
        $irt = new IntegerRightTriangles();
        $ret = $irt->getMostTrianglesPerPerimeter();
        self::assertSame(840, $ret);
    }
}
