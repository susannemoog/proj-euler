<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 04.02.15
 * Time: 15:50
 */

require_once('calc10001stPrime.php');
class calc10001stPrimeTest extends PHPUnit_Framework_TestCase {


	public function testReturnNthPrime() {
		$c1P = new calc10001stPrime();
		$ret = $c1P->returnNthPrime(6);
		$this->assertSame(13, $ret);
	}
}