<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 20.02.15
 * Time: 15:53
 */

namespace P54;


class PokerHands {

	public $cardsPlayer = [];
	public $cardsByKindOfPlayer = [
		1 => 0,
		2 => 0,
		3 => 0,
		4 => 0,
		5 => 0,
		6 => 0,
		7 => 0,
		8 => 0,
		9 => 0,
		10 => 0,
		11 => 0,
		12 => 0,
		13 => 0,
		14 => 0,
	];




	public function __construct($cardsPlayer1, $cardsPlayer2 = []) {
		foreach(array($cardsPlayer1, $cardsPlayer2) as $index => $cards) {
			foreach($cards as $card) {
				switch ($card[0]) {
					case 'A':
						$key = 14;
						break;
					case 'K':
						$key = 13;
						break;
					case 'Q':
						$key = 12;
						break;
					case 'J':
						$key = 11;
						break;
					case 'T':
						$key = 10;
						break;
					default:
						$key = $card[0];
				}
				$this->cardsPlayer[$card[1]][$key] = $key;
				$this->cardsByKindOfPlayer[$key] +=  1;
			}
			$this->score{$index+1} = $this->scoreHand();
		}
	}

	public function isRoyalFlush() {
		foreach($this->cardsPlayer as $set) {
			if(array_sum($set) === 60) {
				return true;
			}
		}
		return false;
	}

	public function isStraightFlush() {
		foreach($this->cardsPlayer as $set) {
			sort($set);
			foreach($set as $index => $card) {
				if(!isset($set[$index+1]) || (isset($set[$index+1]) && $set[$index+1] == $card+1)) {
					continue;
				} else {
					return false;
				}
			}
		}
		return true;
	}

	public function isFourOfAKind() {
		return in_array(4, $this->cardsByKindOfPlayer);
	}

	public function isFullHouse() {
		if(in_array(3, $this->cardsByKindOfPlayer) && in_array(2, $this->cardsByKindOfPlayer)) {
			return true;
		}
		return false;
	}

	public function isFlush() {
		foreach($this->cardsPlayer as $set) {
			if(count($set) === 5) {
				return true;
			}
		}
	}

	public function isStraight() {
		foreach($this->cardsByKindOfPlayer as $index => $count) {
			if($count == 0) {
				continue;
			}
			if($count == 1 && $this->cardsByKindOfPlayer[$index+1] && $this->cardsByKindOfPlayer[$index+2] && $this->cardsByKindOfPlayer[$index+3] && $this->cardsByKindOfPlayer[$index+4] ) {
				return true;
			} else {
				return false;
			}
		}
		return false;
	}

	public function isThreeOfAKind() {
		return in_array(3, $this->cardsByKindOfPlayer);
	}

	public function isTwoPairs() {
		$localCardsByKindCopy = $this->cardsByKindOfPlayer;
		if($key = array_search(2, $localCardsByKindCopy)) {
			unset ($localCardsByKindCopy[$key]);
		}
		if(in_array(2, $localCardsByKindCopy)) {
			return true;
		}
		return false;
	}

	public function isOnePair() {
		if(in_array(2, $this->cardsByKindOfPlayer)) {
			return true;
		}
	}

	public function scoreHand() {
		if($this->isRoyalFlush()) {
			return 500;
		}
		if($this->isStraightFlush()) {
			return 400;
		}
		if($this->isFourOfAKind()){
			return 300;
		}
		if($this->isFullHouse()) {
			return 200;
		}
		if($this->isFlush()) {
			return 100;
		}
		if($this->isStraight()) {
			return 60;
		}
		if($this->isThreeOfAKind()) {
			return 50;
		}
		if($this->isTwoPairs()){
			return 40;
		}
		if($this->isOnePair()) {
			return 30;
		}

		$handKinds = array_flip(array_filter($this->cardsByKindOfPlayer));

		return max($handKinds);
	}


}