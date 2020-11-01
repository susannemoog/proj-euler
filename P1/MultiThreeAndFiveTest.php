<?php

namespace P1;

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 03.02.2015
 * Time: 20:43
 */
class MultiThreeAndFiveTest extends TestCase
{
    public function testSumReturns23ForBelow10()
    {
        $mtaf = new MultiThreeAndFive();
        $ret = $mtaf->sumOfMultiples(9);
        self::assertSame(23, $ret);
    }
}
