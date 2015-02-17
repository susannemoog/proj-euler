<?php
namespace P19;
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 06:47
 */

class CountingSundays extends \Library\Timer {

	public function sundayCount($minYear, $maxYear) {
		$sundays = 0;
		for($year=$minYear;$year<=$maxYear;$year++){
			for($month=1; $month<=12; $month++) {
				$date = new \DateTime('01.' . $month . '.' . $year);
				if($date->format('l') == 'Sunday') {
					$sundays++;
				}
			}
		}
		return $sundays;
	}
}