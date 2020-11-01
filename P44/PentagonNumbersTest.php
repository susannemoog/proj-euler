<?php
namespace P44;

class PentagonNumbersTest extends \PHPUnit\Framework\TestCase {

    public function testGetMinimalPentagonNumberDifference()
    {
        $pn = new PentagonNumbers();
        $ret = $pn->getMinimalPentagonNumberDifference();
        self::assertSame(5482660, $ret);
    }
}
