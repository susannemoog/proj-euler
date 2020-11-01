<?php
namespace P32;

class PandigitalProductsTest extends \PHPUnit\Framework\TestCase {

    public function testGetPandigitalProduct()
    {
        $pp = new PandigitalProducts();
        $ret = $pp->getPandigitalProduct();
        self::assertSame(45228, $ret);
    }
}
