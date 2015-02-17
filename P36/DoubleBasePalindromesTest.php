<?php
namespace P36;

class DoubleBasePalindromesTest extends \PHPUnit_Framework_TestCase {

    public function testGetPalindromeDoubleBased()
    {
        $dbp = new DoubleBasePalindromes();
        $ret = $dbp->getPalindromeDoubleBased();
        $this->assertSame(872187, $ret);
    }
}
