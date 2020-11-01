<?php

namespace P5;

/**
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */
class SmallestMultipleTest extends \PHPUnit\Framework\TestCase
{

    public function testGetSmallestMultiple()
    {
        $sm = new SmallestMultiple();
        $ret = $sm->getSmallestMultiple(20);
        self::assertSame(232792560, $ret);
    }

}
