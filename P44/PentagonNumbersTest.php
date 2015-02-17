<?php
namespace P44;

class PentagonNumbersTest extends \PHPUnit_Framework_TestCase {

    public function testGetMinimalPentagonNumberDifference()
    {
        $pn = new PentagonNumbers();
        $ret = $pn->getMinimalPentagonNumberDifference();
        $this->assertSame(5482660, $ret);
    }
}
