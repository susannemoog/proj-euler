<?hh

require_once('FourDistinctPrimeFactors.hh');
class FourDistinctPrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function testGetConsecutiveWithFourDistinctFactors(){
        $fdpf = new FourDistinctPrimeFactors();
        $ret = $fdpf->getConsecutiveWithFourDistinctFactors();
        $this->assertSame(134043, $ret);
    }
}
