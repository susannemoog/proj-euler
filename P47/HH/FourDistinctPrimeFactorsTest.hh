<?hh

require_once('FourDistinctPrimeFactors.hh');
class FourDistinctPrimeFactorsTest extends \PHPUnit\Framework\TestCase {

    public function testGetConsecutiveWithFourDistinctFactors(){
        $fdpf = new FourDistinctPrimeFactors();
        $ret = $fdpf->getConsecutiveWithFourDistinctFactors();
        self::assertSame(134043, $ret);
    }
}
