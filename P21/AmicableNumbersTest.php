<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 07:23
 */

require_once('AmicableNumbers.php');
class AmicableNumbersTest extends PHPUnit_Framework_TestCase {

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
