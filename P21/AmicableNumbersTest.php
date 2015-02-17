<?php
namespace P21;

class AmicableNumbersTest extends \PHPUnit_Framework_TestCase {

	public function testGetAmicableNumberPairsSum() {
		$max = 1000;
		$an = new AmicableNumbers();
		$ret = $an->getAmicableNumberPairsSum($max);
		$this->assertSame(504, $ret);
	}

	public function testGetAmicableNumberPairsSumReal() {
		$max = 10000;
		$an = new AmicableNumbers();
		$ret = $an->getAmicableNumberPairsSum($max);
		$this->assertSame(31626, $ret);
	}
}
