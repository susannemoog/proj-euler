<?php
namespace P33;

class DigitCancellingFractionsTest extends \PHPUnit_Framework_TestCase {

    public function testGetDigitCancellingFractions()
    {
        $dcf = new DigitCancellingFractions();
        $ret = $dcf->getDenominator();
        $this->assertSame(100, $ret);
    }
}
