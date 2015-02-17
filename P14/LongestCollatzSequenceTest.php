<?php
namespace P14;

class LongestCollatzSequenceTest extends \PHPUnit_Framework_TestCase {

	public function testGetLongest() {
		$lcs = new LongestCollatzSequence();
		$ret = $lcs->getLongest();
		$this->assertSame(837799, $ret);
	}
}
