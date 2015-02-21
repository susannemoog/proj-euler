<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 09:36
 */

namespace P57;


class SquareRootConvergenceTest extends \PHPUnit_Framework_TestCase {

    /**
     */
    public function testGetFractionsWithBiggerNumerator()
    {
        $src = new SquareRootConvergence();
        $ret = $src->getFractionWithBiggerNumerator();
        $this->assertSame(153, $ret);
    }
}
