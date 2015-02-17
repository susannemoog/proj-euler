<?php
namespace P46;

class GoldbachsOtherConjectureTest extends \PHPUnit_Framework_TestCase {

    public function testGetNonMatching()
    {
        $goc = new GoldbachsOtherConjecture();
        $ret = $goc->getNonMatching();
        $this->assertSame(5777, $ret);
    }
}