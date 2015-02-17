<?php
namespace P22;
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 07:34
 */

class NameScores extends \Library\Timer {

	static protected $alphamap = [
		'a' => '+1',
		'b' => '+2',
		'c' => '+3',
		'd' => '+4',
		'e' => '+5',
		'f' => '+6',
		'g' => '+7',
		'h' => '+8',
		'i' => '+9',
		'j' => '+10',
		'k' => '+11',
		'l' => '+12',
		'm' => '+13',
		'n' => '+14',
		'o' => '+15',
		'p' => '+16',
		'q' => '+17',
		'r' => '+18',
		's' => '+19',
		't' => '+20',
		'u' => '+21',
		'v' => '+22',
		'w' => '+23',
		'x' => '+24',
		'y' => '+25',
		'z' => '+26'
	];

	public function getNamesScoreSum() {
		$sum = 0;
		$names = explode(',', file_get_contents('../Ressources/p022_names.txt'));
		sort($names);
		$numbers = explode(',', str_ireplace(array_flip(static::$alphamap), static::$alphamap, str_replace('"', '', implode(',', $names))));

		foreach($numbers as $index => $number) {
			eval('$numberE = ' . $number . ';');
			$sum = bcadd($sum, bcmul($index+1, $numberE));
		}
		return $sum;
	}
}