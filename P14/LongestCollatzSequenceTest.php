<?php
namespace P14;

class LongestCollatzSequenceTest extends \PHPUnit\Framework\TestCase {

	public function testGetLongest() {
		$lcs = new LongestCollatzSequence();
		$ret = $lcs->getLongest();
		self::assertSame(837799, $ret);
	}
}
