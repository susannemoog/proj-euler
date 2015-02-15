<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 10:23
 */

require_once('SubStringDivisibility.php');
class SubStringDivisibilityTest extends PHPUnit_Framework_TestCase {

    public function testSubStringDivisibility()
    {
        $ssd = new SubStringDivisibility();
        $ret = $ssd->getSumOfAllCases();
        $this->assertSame(16695334890, $ret);
    }
}
