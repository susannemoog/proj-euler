<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 18:37
 */
require_once('PentagonNumbers.php');
class PentagonNumbersTest extends PHPUnit_Framework_TestCase {

    public function testGetMinimalPentagonNumberDifference()
    {
        $pn = new PentagonNumbers();
        $ret = $pn->getMinimalPentagonNumberDifference();
        $this->assertSame(5482660, $ret);
    }
}
