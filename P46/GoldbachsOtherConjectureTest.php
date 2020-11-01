<?php
namespace P46;

class GoldbachsOtherConjectureTest extends \PHPUnit\Framework\TestCase {

    public function testGetNonMatching()
    {
        $goc = new GoldbachsOtherConjecture();
        $ret = $goc->getNonMatching();
        self::assertSame(5777, $ret);
    }
}
