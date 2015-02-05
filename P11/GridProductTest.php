<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 05.02.15
 * Time: 07:53
 */

require_once('GridProduct.php');
class GridProductTest extends PHPUnit_Framework_TestCase {

	public function testGridProduct() {
		$gp = new GridProduct();
		$ret = $gp->getGridProduct();
		$this->assertSame(70600674, $ret);
	}
}
