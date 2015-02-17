<?php
namespace P16;

class SumOfPowDigitsTest extends \PHPUnit_Framework_TestCase {

	public function testGetSumOfPow() {
		$sopd = new SumOfPowDigits();
		$ret = $sopd->getSumOfPow(1000);
		$this->assertSame(1366, $ret);
	}
}
