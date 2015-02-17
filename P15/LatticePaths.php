<?php
namespace P15;


class LatticePaths extends \Library\Timer {

	public function getPaths($gridWidth, $gridHeight) {
		$n = $gridWidth + $gridHeight;
		$k = $gridHeight;
		return (\Library\Factorial::getFactorials($n)) / ((\Library\Factorial::getFactorials($n - $k)) * (\Library\Factorial::getFactorials($k)));
	}
}