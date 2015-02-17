<?php
namespace P13;

class SumOfLargeNumberTest extends \PHPUnit_Framework_TestCase {

	public function testSum() {
		$slN = new SumOfLargeNumber();
		$sum = $slN->sum();
		$this->assertSame('5537376230', $sum);
	}
}
