<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 11.02.2015
 * Time: 18:40
 */

require_once('ReciprocalCycles.php');
class ReciprocalCyclesTest extends PHPUnit_Framework_TestCase {

    public function testLongestReciprocalCycleUnderThousand()
    {
        $rc = new ReciprocalCycles();
        $ret = $rc->longestReciprocalCycleBelowThousand();
        $this->assertSame(982, $ret);
    }
}
