<?php
namespace P30;

class DigitFifthPowersTest extends \PHPUnit_Framework_TestCase {

	public function testGetSumOfFifthPowerDigitNumbers() {
		$dfp = new DigitFifthPowers();
		$ret = $dfp->getSumOfFifthPowerDigitNumbers();
		$this->assertSame(443839, $ret);
	}
}
