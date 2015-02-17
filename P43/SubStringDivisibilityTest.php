<?php
namespace P43;

class SubStringDivisibilityTest extends \PHPUnit_Framework_TestCase {

    public function testSubStringDivisibility()
    {
        $ssd = new SubStringDivisibility();
        $ret = $ssd->getSumOfAllCases();
        $this->assertSame(16695334890, $ret);
    }
}
