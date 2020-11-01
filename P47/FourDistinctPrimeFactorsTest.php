<?php
namespace P47;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 16.02.2015
 * Time: 21:01
 */
class FourDistinctPrimeFactorsTest extends \PHPUnit\Framework\TestCase {

    public function testGetConsecutiveWithFourDistinctFactors(){
        $fdpf = new FourDistinctPrimeFactors();
        $ret = $fdpf->getConsecutiveWithFourDistinctFactors();
        self::assertSame(134043, $ret);
    }
}
