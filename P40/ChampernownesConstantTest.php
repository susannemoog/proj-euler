<?php
namespace P40;

class ChampernownesConstantTest extends \PHPUnit\Framework\TestCase {

    public function testGetValueForExpression()
    {
        $cc = new ChampernownesConstant();
        $ret = $cc->getValueForExpression();
        self::assertSame(210, $ret);
    }
}
