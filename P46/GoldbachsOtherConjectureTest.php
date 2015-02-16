<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 16.02.2015
 * Time: 20:27
 */
require_once('GoldbachsOtherConjecture.php');
class GoldbachsOtherConjectureTest extends PHPUnit_Framework_TestCase {

    public function testGetNonMatching()
    {
        $goc = new GoldbachsOtherConjecture();
        $ret = $goc->getNonMatching();
        $this->assertSame(5777, $ret);
    }
}