<?php
namespace P33;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 08:26
 */

require_once(dirname(dirname(__FILE__)) . '/Library/Denominators.php');
class DigitCancellingFractions extends \Library\Timer {

    public function getDenominator()
    {
        $numerator = 1;
        $finalDenominator = 1;
        for($nominator = 10; $nominator < 100; $nominator++) {
            for($denominator = 11; $denominator < 100; $denominator++) {
                if($nominator >= $denominator)
                    continue;

                $nominator = (string)$nominator;
                $denominator = (string)$denominator;
                $result = $nominator / $denominator;

                $considerPossibility =
                    (
                        ($nominator[1] == $denominator[0])
                        && ($nominator[0] != $nominator[1])
                        && ($nominator[0] != $denominator[1])
                    )
                    ||
                    (
                        ($nominator[0] == $denominator[1])
                        && ($nominator[0] != $nominator[1])
                        && ($nominator[1] != $denominator[0])
                    );

                if(($denominator[0] != 0 && ($considerPossibility) && $result == $nominator[1] / $denominator[0]) ||
                    ($denominator[1] != 0 && ($considerPossibility) && $result == $nominator[0] / $denominator[1])) {
                    $numerator *= $nominator;
                    $finalDenominator *= $denominator;
                }
            }
        }

        $finalDenominator /=\Library\Denominators::gcd($numerator, $finalDenominator);
        return $finalDenominator;
    }
}