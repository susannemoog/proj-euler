<?php
namespace P42;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 10:01
 */

class CodedTriangleNumbers extends \Library\Timer {

    public function getCountOfTriangleNumbers()
    {
        $triangleWordCount = 0;
        $triangles = $this->getTriangles(100);
        $doc = str_replace('"', '', file_get_contents('../Ressources/p042_words.txt'));
        $wordArr = explode(',', $doc);
        foreach($wordArr as $word) {
            $charArr = str_split($word);
            array_walk($charArr, function(&$char) {
               $char = ord($char) - 64;
            });
            $wordSum = array_sum($charArr);
            if(isset($triangles[$wordSum])) {
                $triangleWordCount++;
            }
        }
        return $triangleWordCount;
    }

    private function getTriangles($max)
    {
        $triangles = [1 => 1];
        $triangle = 1;
        for($i=1;$i<$max;$i++) {
            $triangle += ($i+1);
            $triangles[$triangle] = $triangle;
        }
        return $triangles;
    }
}