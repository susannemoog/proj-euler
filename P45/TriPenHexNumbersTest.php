<?php
namespace P45;

class TriPenHexNumbersTest extends \PHPUnit_Framework_TestCase {

    public function testGetNumberThatHasItAll()
    {
        $tphn = new TriPenHexNumbers();
        $ret = $tphn->getNumberThatHasItAll();
        $this->assertSame(1533776805, $ret);
    }
}
