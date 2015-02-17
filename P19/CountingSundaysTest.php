<?php
namespace P19;

class CountingSundaysTest extends \PHPUnit_Framework_TestCase {

	public function testSundayCount() {
		$minYear = 1901;
		$maxYear = 2000;
		$cs = new CountingSundays();
		$ret = $cs->sundayCount($minYear, $maxYear);
		$this->assertSame(171, $ret);
	}
}
