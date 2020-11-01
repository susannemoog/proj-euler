<?php
namespace P45;

class TriPenHexNumbersTest extends \PHPUnit\Framework\TestCase {

    public function testGetNumberThatHasItAll()
    {
        $tphn = new TriPenHexNumbers();
        $ret = $tphn->getNumberThatHasItAll();
        self::assertSame(1533776805, $ret);
    }
}
