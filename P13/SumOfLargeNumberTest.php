<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 09:42
 */

require_once ('SumOfLargeNumber.php');
class SumOfLargeNumberTest extends PHPUnit_Framework_TestCase {

	public function testSum() {
		$slN = new SumOfLargeNumber();
		$sum = $slN->sum();
		$this->assertSame('5537376230', $sum);
	}
}
