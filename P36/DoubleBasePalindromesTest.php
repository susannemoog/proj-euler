<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 17:58
 */

require_once('DoubleBasePalindromes.php');
class DoubleBasePalindromesTest extends PHPUnit_Framework_TestCase {

    public function testGetPalindromeDoubleBased()
    {
        $dbp = new DoubleBasePalindromes();
        $ret = $dbp->getPalindromeDoubleBased();
        $this->assertSame(123, $ret);
    }
}
