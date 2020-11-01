<?php

namespace P13;

class SumOfLargeNumberTest extends \PHPUnit\Framework\TestCase
{

    public function testSum()
    {
        $slN = new SumOfLargeNumber();
        $sum = $slN->sum();
        self::assertSame('5537376230', $sum);
    }
}
