<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 10:23
 */

class SubStringDivisibility {

    public function getSumOfAllCases()
    {
        $multiples = $this->getMultiples();
        $newNumbers = [];

        foreach($multiples[17] as $m17) {
            foreach($multiples[13] as $m13) {
                if (substr($m17, 0, 2) === substr($m13, 1, 2)) {
                    $newDigit = substr($m13, 0, 1);
                    if(strpos($m17, $newDigit) === false) {
                        $newNumbers[] = substr($m13, 0, 1) . $m17;
                    }
                }
            }
        }
        $results = [];
        foreach($newNumbers as $multiple) {
            $this->getNumbers($multiples, $multiple, 11, $results);
        }

        $nextResults = [];
        foreach($results as $multiple) {
            $this->getNumbers($multiples, $multiple, 7, $nextResults);
        }

        $results = [];
        foreach($nextResults as $multiple) {
            $this->getNumbers($multiples, $multiple, 5, $results);
        }

        $nextResults = [];
        foreach($results as $multiple) {
            $this->getNumbers($multiples, $multiple, 3, $nextResults);
        }

        $results = [];
        foreach($nextResults as $multiple) {
            $this->getNumbers($multiples, $multiple, 2, $results);
        }


        foreach($results as &$result) {
            if(strpos($result, '1') !== false) {
                $result = '4' . $result;
            } else {
                $result = '1' . $result;
            }
        }
        return array_sum($results);
    }

    /**
     * @param $multiples
     */
    protected function getMultiples()
    {
        $divisorArr = [2,3,5,7,11,13,17];
        $multiples = [];
        foreach($divisorArr as $n) {
            for ($i = 1; ; $i++) {
                $multiple = $i * $n;
                if ($multiple < 100 && $multiple >= 10) {
                    $multiple = '0' . $multiple;
                }
                if ($multiple < 10 && $multiple > 0) {
                    continue;
                }
                if ($multiple > 999) {
                    break;
                }
                $multiArr = str_split($multiple);
                if(count($multiArr) !== count(array_unique($multiArr))) {
                    continue;
                }
                $multiples[$n][$multiple] = $multiple;
            }
        }
        return $multiples;
    }

    /**
     * @param $multiples
     * @param $currentMultiple
     * @param $results
     * @return array
     */
    protected function getNumbers($multiples, $currentMultiple, $sub, &$results)
    {
        foreach ($multiples[$sub] as $m11) {
            if (substr($currentMultiple, 0, 2) === substr($m11, 1, 2)) {
                $newDigit = substr($m11, 0, 1);
                if (strpos($currentMultiple, $newDigit) === false) {
                    $results[] = substr($m11, 0, 1) . $currentMultiple;
                }
            }
        }
    }
}