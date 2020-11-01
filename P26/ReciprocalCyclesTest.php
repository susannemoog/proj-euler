<?php
namespace P26;

class ReciprocalCyclesTest extends \PHPUnit\Framework\TestCase {

    public function testLongestReciprocalCycleUnderThousand()
    {
        $rc = new ReciprocalCycles();
        $ret = $rc->longestReciprocalCycleBelowThousand();
        self::assertSame(983, $ret);
    }
}
