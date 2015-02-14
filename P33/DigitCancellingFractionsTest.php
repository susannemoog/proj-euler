<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 08:26
 */

require_once('DigitCancellingFractions.php');
class DigitCancellingFractionsTest extends PHPUnit_Framework_TestCase {

    public function testGetDigitCancellingFractions()
    {
        $dcf = new DigitCancellingFractions();
        $ret = $dcf->getDenominator();
        $this->assertSame(100, $ret);
    }
}
