<?php
namespace P40;

class ChampernownesConstantTest extends \PHPUnit_Framework_TestCase {

    public function testGetValueForExpression()
    {
        $cc = new ChampernownesConstant();
        $ret = $cc->getValueForExpression();
        $this->assertSame(210, $ret);
    }
}
