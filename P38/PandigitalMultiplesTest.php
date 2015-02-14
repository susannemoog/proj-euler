<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 18:57
 */

require_once('PandigitalMultiples.php');
class PandigitalMultiplesTest extends PHPUnit_Framework_TestCase {


    public function testGetLargestPandigitalMultiple()
    {
        $pm = new PandigitalMultiples();
        $ret = $pm->getLargestPandigitalMultiple();
        $this->assertSame(123, $ret);
    }
}
