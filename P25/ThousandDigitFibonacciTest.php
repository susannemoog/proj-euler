<?php
namespace P25;

class ThousandDigitFibonacciTest extends \PHPUnit_Framework_TestCase {

	public function testGetThousandDigitFibonacci() {
		$tdf = new ThousandDigitFibonacci();
		$ret = $tdf->getThousandDigitFibonacci();
		$this->assertSame(4782, $ret);
	}
}
