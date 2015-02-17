<?php
namespace P11;

class GridProductTest extends \PHPUnit_Framework_TestCase {

	public function testGridProduct() {
		$gp = new GridProduct();
		$ret = $gp->getGridProduct();
		$this->assertSame(70600674, $ret);
	}
}
