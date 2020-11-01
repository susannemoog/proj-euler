<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 08:52
 */

namespace P56;


class MaximumDigitSumTest extends \PHPUnit\Framework\TestCase {

    public function testGetMaximumDigitSum()
    {
        $mds = new MaximumDigitSum();
        $ret = $mds->getMaximumDigitSum();
        self::assertSame(972, $ret);
    }
}
