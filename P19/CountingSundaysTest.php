<?php
namespace P19;

class CountingSundaysTest extends \PHPUnit\Framework\TestCase {

	public function testSundayCount() {
		$minYear = 1901;
		$maxYear = 2000;
		$cs = new CountingSundays();
		$ret = $cs->sundayCount($minYear, $maxYear);
		self::assertSame(171, $ret);
	}
}
