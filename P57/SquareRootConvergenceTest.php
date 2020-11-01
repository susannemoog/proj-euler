<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 09:36
 */

namespace P57;


class SquareRootConvergenceTest extends \PHPUnit\Framework\TestCase {

    /**
     */
    public function testGetFractionsWithBiggerNumerator()
    {
        $src = new SquareRootConvergence();
        $ret = $src->getFractionWithBiggerNumerator();
        self::assertSame(153, $ret);
    }
}
