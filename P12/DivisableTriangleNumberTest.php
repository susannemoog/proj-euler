<?php
namespace P12;

class DivisableTriangleNumberTest extends \PHPUnit_Framework_TestCase {

	public function testTriangleWithXDivisors() {
		$dtn = new DivisableTriangleNumber();
		$ret = $dtn->triangleWithXDivisors(500);
		$this->assertSame(76576500, $ret);
	}
}
