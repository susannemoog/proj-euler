<?php
namespace P33;

class DigitCancellingFractionsTest extends \PHPUnit\Framework\TestCase {

    public function testGetDigitCancellingFractions()
    {
        $dcf = new DigitCancellingFractions();
        $ret = $dcf->getDenominator();
        self::assertSame(100, $ret);
    }
}
