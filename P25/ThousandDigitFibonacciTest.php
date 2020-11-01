<?php
namespace P25;

class ThousandDigitFibonacciTest extends \PHPUnit\Framework\TestCase {

	public function testGetThousandDigitFibonacci() {
		$tdf = new ThousandDigitFibonacci();
		$ret = $tdf->getThousandDigitFibonacci();
		self::assertSame(4782, $ret);
	}
}
