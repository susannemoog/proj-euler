<?php

namespace P11;

class GridProductTest extends \PHPUnit\Framework\TestCase
{

    public function testGridProduct()
    {
        $gp = new GridProduct();
        $ret = $gp->getGridProduct();
        self::assertSame(70600674, $ret);
    }
}
