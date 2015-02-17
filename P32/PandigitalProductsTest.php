<?php
namespace P32;

class PandigitalProductsTest extends \PHPUnit_Framework_TestCase {

    public function testGetPandigitalProduct()
    {
        $pp = new PandigitalProducts();
        $ret = $pp->getPandigitalProduct();
        $this->assertSame(45228, $ret);
    }
}
