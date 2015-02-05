<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 05.02.15
 * Time: 08:27
 */

require_once('DivisableTriangleNumber.php');
class DivisableTriangleNumberTest extends PHPUnit_Framework_TestCase {

	public function testTriangleWithXDivisors() {
		$dtn = new DivisableTriangleNumber();
		$ret = $dtn->triangleWithXDivisors(500);
		$this->assertSame(28,$ret);
	}
}
