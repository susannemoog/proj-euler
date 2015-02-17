<?php
namespace P47;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 16.02.2015
 * Time: 21:01
 */
class FourDistinctPrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function testGetConsecutiveWithFourDistinctFactors(){
        $fdpf = new FourDistinctPrimeFactors();
        $ret = $fdpf->getConsecutiveWithFourDistinctFactors();
        $this->assertSame(134043, $ret);
    }
}
