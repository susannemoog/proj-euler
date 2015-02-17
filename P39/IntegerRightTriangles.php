<?php
namespace P39;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 19:42
 */

class IntegerRightTriangles extends \Library\Timer {

    public function getMostTrianglesPerPerimeter()
    {
        $perimeterWithMostTriangles = 0;
        $triangles = 0;
        for($perimeter = 2; $perimeter <= 1000; $perimeter++) {
            $currentTriangles = 0;
            for ($a = 2; $a < ($perimeter/3); $a++) {
                if($perimeter * ($perimeter-2 * $a) % (2 * ($perimeter - $a)) == 0){
                    $currentTriangles++;
                }
            }
            if($currentTriangles > $triangles){
              $triangles = $currentTriangles;
              $perimeterWithMostTriangles = $perimeter;
            }
        }
        return $perimeterWithMostTriangles;
    }
}