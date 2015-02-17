<?php
namespace P1;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 03.02.2015
 * Time: 20:43
 */

class MultiThreeAndFiveTest extends \PHPUnit_Framework_TestCase {
    public function testSumReturns23ForBelow10()
    {
        $mtaf = new MultiThreeAndFive();
        $ret = $mtaf->sumOfMultiples(9);
        $this->assertSame(23, $ret);
    }
}
