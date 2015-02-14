<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 19:55
 */
require_once('ChampernownesConstant.php');
class ChampernownesConstantTest extends PHPUnit_Framework_TestCase {

    public function testGetValueForExpression()
    {
        $cc = new ChampernownesConstant();
        $ret = $cc->getValueForExpression();
        $this->assertSame(210, $ret);
    }
}
