<?php
namespace P38;

class PandigitalMultiplesTest extends \PHPUnit\Framework\TestCase {


    public function testGetLargestPandigitalMultiple()
    {
        $pm = new PandigitalMultiples();
        $ret = $pm->getLargestPandigitalMultiple();
        $this->assertEquals(932718654, $ret);
    }
}
