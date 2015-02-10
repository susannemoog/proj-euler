<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 06:47
 */

require_once('CountingSundays.php');
class CountingSundaysTest extends PHPUnit_Framework_TestCase {

	public function testSundayCount() {
		$minYear = 1901;
		$maxYear = 2000;
		$cs = new CountingSundays();
		$ret = $cs->sundayCount($minYear, $maxYear);
		$this->assertSame(171, $ret);
	}
}
