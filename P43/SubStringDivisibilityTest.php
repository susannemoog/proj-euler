<?php
namespace P43;

class SubStringDivisibilityTest extends \PHPUnit\Framework\TestCase {

    public function testSubStringDivisibility()
    {
        $ssd = new SubStringDivisibility();
        $ret = $ssd->getSumOfAllCases();
        self::assertSame(16695334890, $ret);
    }
}
