<?php

namespace P12;

class DivisableTriangleNumberTest extends \PHPUnit\Framework\TestCase
{

    public function testTriangleWithXDivisors()
    {
        $dtn = new DivisableTriangleNumber();
        $ret = $dtn->triangleWithXDivisors(500);
        self::assertSame(76576500, $ret);
    }
}
