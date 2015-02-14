<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 10:16
 */

require_once('DigitFactorials.php');
class DigitFactorialsTest extends PHPUnit_Framework_TestCase {

    public function testGetDigitFactorialSum()
    {
        $df = new DigitFactorials();
        $ret = $df->getDigitFactorialSumWithoutStrings();
        $this->assertSame(40730, $ret);
    }
}
