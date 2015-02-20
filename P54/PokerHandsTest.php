<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 20.02.15
 * Time: 15:54
 */

namespace P54;


class PokerHandsTest extends \PHPUnit_Framework_TestCase {

	public function testIsRoyalFlush() {
		$cards = [
			'TD', 'JD', 'QD', 'KD', 'AD'
		];

		$ph = new PokerHands($cards);
		$ret = $ph->isRoyalFlush();
		$this->assertTrue($ret);
	}

	public function testIsStraightFlush() {
		$cards = [
			'1D', '2D', '3D', '4D', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isStraightFlush();
		$this->assertTrue($ret);
	}

	public function testIsFourOfAKind() {
		$cards = [
			'AD', 'AS', 'AH', 'AC', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isFourOfAKind();
		$this->assertTrue($ret);
	}

	public function testIsFullHouse() {
		$cards = [
			'AD', 'AS', 'AH', '5C', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isFullHouse();
		$this->assertTrue($ret);
	}

	public function testIsFlush() {
		$cards = [
			'1D', '2D', '3D', '4D', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isFlush();
		$this->assertTrue($ret);
	}

	public function testIsStraight() {
		$cards = [
			'1D', '2D', '3D', '4D', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isStraight();
		$this->assertTrue($ret);
	}

	public function testIsThreeOfAKind() {
		$cards = [
			'AD', 'AS', 'AH', '6C', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isThreeOfAKind();
		$this->assertTrue($ret);
	}

	public function testIsTwoPairs(){
		$cards = [
			'AD', 'AS', 'JH', 'JC', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isTwoPairs();
		$this->assertTrue($ret);
	}

	public function testIsOnePair() {
		$cards = [
			'AD', 'AS', 'KH', 'JC', '5D'
		];
		$ph = new PokerHands($cards);
		$ret = $ph->isOnePair();
		$this->assertTrue($ret);
	}

	public function handsDataProvider() {
		return [
			'royal' => [['TD', 'JD', 'QD', 'KD', 'AD'], 500],
			'straight flush' => [['1D', '2D', '3D', '4D', '5D'], 400],
			'four of a kind' => [['AD', 'AS', 'AH', 'AC', '5D'], 300],
			'full house' => [['AD', 'AS', 'AH', '5C', '5D'], 200],
			'flush' => [['9D', '2D', '3D', '4D', '5D'], 100],
			'straight' => [['1D', '2D', '3D', '4S', '5D'], 60],
			'three of a kind' => [['AD', 'AS', 'AH', '6C', '5D'], 50],
			'two pairs' => [['AD', 'AS', 'JH', 'JC', '5D'], 40],
			'one pair' => [['AD', 'AS', 'KH', 'JC', '5D'], 30],
			'high card' => [['AD', '9S', 'KH', 'JC', '5D'], 14]
		];
	}

	/**
	 * @dataProvider handsDataProvider
	 */
	public function testScoreHand($cards, $expected) {
		$ph = new PokerHands($cards);
		$ret = $ph->scoreHand();
		$this->assertSame($expected, $ret);
	}

	public function gameDataProvider() {
		return [
			[['5H', '5C', '6S', '7S', 'KD'], ['2C', '3S', '8S', '8D', 'TD'], 1],
			[['5D', '8C', '9S', 'JS', 'AC'], ['2C', '5C', '7D', '8S', 'QH'], 0],
			[['2D', '9C', 'AS', 'AH', 'AC'], ['3D', '6D', '7D', 'TD', 'QD'], 1],
			[['4D', '6S', '9H', 'QH', 'QC'], ['3D', '6D', '7H', 'QD', 'QS'], 0],
			[['2H', '2D', '4C', '4D', '4S'], ['3C', '3D', '3S', '9S', '9D'], 0],
		];
	}

	public function testWinningHand($hand1, $hand2, $winner) {
		$ph = new PokerHands($hand1, $hand2);
		$ret = $ph->scoreHand();
		$this->assertSame($winner, $ret);
	}
}
