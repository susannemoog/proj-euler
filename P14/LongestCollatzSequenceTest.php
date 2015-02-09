<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 12:49
 */

require_once('LongestCollatzSequence.php');
class LongestCollatzSequenceTest extends PHPUnit_Framework_TestCase {

	public function testGetLongest() {
		$lcs = new LongestCollatzSequence();
		$ret = $lcs->getLongest();
		$this->assertSame(837799, $ret);
	}
}
