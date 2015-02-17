<?php
namespace P26;

class ReciprocalCyclesTest extends \PHPUnit_Framework_TestCase {

    public function testLongestReciprocalCycleUnderThousand()
    {
        $rc = new ReciprocalCycles();
        $ret = $rc->longestReciprocalCycleBelowThousand();
        $this->assertSame(983, $ret);
    }
}
