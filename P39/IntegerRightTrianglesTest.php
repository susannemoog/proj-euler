<?php
namespace P39;

class IntegerRightTrianglesTest extends \PHPUnit_Framework_TestCase {

    public function testGetMostTrianglesPerPerimeter()
    {
        $irt = new IntegerRightTriangles();
        $ret = $irt->getMostTrianglesPerPerimeter();
        $this->assertSame(840, $ret);
    }
}
