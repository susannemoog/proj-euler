<?php
namespace P44;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 18:37
 */

class PentagonNumbers extends \Library\Timer {

    public function getMinimalPentagonNumberDifference()
    {
        $pentagons = $this->getPentagonNumbers();
        foreach($pentagons as $pentagon) {
            foreach($pentagons as $secondPentagon) {
                if(isset($pentagons[$pentagon+$secondPentagon])
                    && isset($pentagons[$secondPentagon - $pentagon])) {
                    return $secondPentagon-$pentagon;
                }
            }
        }
        return 0;
    }

    private function getPentagonNumbers()
    {
        $pentagons = [];
        for($i=1; $i<2500; $i++) {
            $pentagon = $i * (3 * $i - 1) / 2;
            $pentagons[(int)$pentagon] = $pentagon;
        }
        return $pentagons;
    }
}