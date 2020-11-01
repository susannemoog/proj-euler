<?php
namespace P16;

class SumOfPowDigitsTest extends \PHPUnit\Framework\TestCase {

	public function testGetSumOfPow() {
		$sopd = new SumOfPowDigits();
		$ret = $sopd->getSumOfPow(1000);
		self::assertSame(1366, $ret);
	}
}
