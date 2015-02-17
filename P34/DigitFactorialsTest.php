<?php
namespace P34;

class DigitFactorialsTest extends \PHPUnit_Framework_TestCase {

    public function testGetDigitFactorialSum()
    {
        $df = new DigitFactorials();
        $ret = $df->getDigitFactorialSum();
        $this->assertSame(40730, $ret);
    }
}
