<?php
namespace P38;

class PandigitalMultiplesTest extends \PHPUnit_Framework_TestCase {


    public function testGetLargestPandigitalMultiple()
    {
        $pm = new PandigitalMultiples();
        $ret = $pm->getLargestPandigitalMultiple();
        $this->assertEquals(932718654, $ret);
    }
}
