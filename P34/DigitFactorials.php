<?php
namespace P34;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 10:16
 */
require_once(dirname(dirname(__FILE__)) . '/Library/Factorial.php');
class DigitFactorials extends \Library\Timer {

    // Time: 1.08 minutes, Memory: 5.25Mb
    public function getDigitFactorialSum()
    {
        $upperBound = bcmul(7,\Library\Factorial::getFactorials(9));
        $factorials = [
            0 =>\Library\Factorial::getFactorials(0),
            1 =>\Library\Factorial::getFactorials(1),
            2 =>\Library\Factorial::getFactorials(2),
            3 =>\Library\Factorial::getFactorials(3),
            4 =>\Library\Factorial::getFactorials(4),
            5 =>\Library\Factorial::getFactorials(5),
            6 =>\Library\Factorial::getFactorials(6),
            7 =>\Library\Factorial::getFactorials(7),
            8 =>\Library\Factorial::getFactorials(8),
            9 =>\Library\Factorial::getFactorials(9),
        ];

        $foundSums = [];

        for($i=3; $i<=$upperBound; $i++) {
            $sumOfFactorials = 0;
            $stringi = (string)($i);
            for ($j = 0; $j < strlen($i); $j++) {
                $sumOfFactorials += $factorials[$stringi[$j]];
            }
            if($sumOfFactorials == $i) {
                $foundSums[] = $i;
            }
        }
        return $foundSums;
    }

    public function getDigitFactorialSumWithoutStrings()
    {
        $upperBound = (7 *\Library\Factorial::getFactorials(9));
        $factorials = [
            0 =>\Library\Factorial::getFactorials(0),
            1 =>\Library\Factorial::getFactorials(1),
            2 =>\Library\Factorial::getFactorials(2),
            3 =>\Library\Factorial::getFactorials(3),
            4 =>\Library\Factorial::getFactorials(4),
            5 =>\Library\Factorial::getFactorials(5),
            6 =>\Library\Factorial::getFactorials(6),
            7 =>\Library\Factorial::getFactorials(7),
            8 =>\Library\Factorial::getFactorials(8),
            9 =>\Library\Factorial::getFactorials(9),
        ];

        $foundSums = 0;

        for($i=3; $i<$upperBound; $i++) {
            $number = $i;
            $sumOfPowers = 0;
            while ((int)$number > 0) {
                $digit = $number % 10;
                $number /= 10;
                $sumOfPowers += $factorials[$digit];
            }
            if($sumOfPowers === $i) {
                $foundSums+=$i;
            }
        }
        return $foundSums;
    }
}