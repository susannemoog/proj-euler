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
			'royal' => [['TD', 'JD', 'QD', 'KD', 'AD'], 25000000000],
			'straight flush' => [['1D', '2D', '3D', '4D', '5D'], 7987100175],
			'four of a kind' => [['AD', 'AS', 'AH', 'AC', '5D'], 1597420020],
			'full house' => [['AD', 'AS', 'AH', '5C', '5D'], 114101414],
			'flush' => [['9D', '2D', '3D', '4D', '5D'], 5239341],
			'straight' => [['1D', '2D', '3D', '4S', '5D'], 207905],
			'three of a kind' => [['AD', 'AS', 'AH', '6C', '5D'], 41566],
			'two pairs' => [['AD', 'AS', 'JH', 'JC', '5D'], 2954],
			'one pair' => [['AD', 'AS', 'KH', 'JC', '5D'], 196],
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
}
