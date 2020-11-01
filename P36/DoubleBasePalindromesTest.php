<?php
namespace P36;

class DoubleBasePalindromesTest extends \PHPUnit\Framework\TestCase {

    public function testGetPalindromeDoubleBased()
    {
        $dbp = new DoubleBasePalindromes();
        $ret = $dbp->getPalindromeDoubleBased();
        self::assertSame(872187, $ret);
    }
}
