<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 08:04
 */

require_once('PandigitalProducts.php');
class PandigitalProductsTest extends PHPUnit_Framework_TestCase {

    public function testGetPandigitalProduct()
    {
        $pp = new PandigitalProducts();
        $ret = $pp->getPandigitalProduct();
        $this->assertSame(45228, $ret);
    }
}
