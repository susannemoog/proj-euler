<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 17.02.2015
 * Time: 18:39
 */

namespace P48;


class SelfPowersTest extends \PHPUnit_Framework_TestCase {

    public function testGetLastNDigits()
    {
        $sp = new SelfPowers();
        $ret = $sp->getLastNDigits(10);
        $this->assertSame("10405071317", $ret);
    }
}
