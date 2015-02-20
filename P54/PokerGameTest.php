<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 20.02.2015
 * Time: 19:16
 */

namespace P54;


class PokerGameTest extends \PHPUnit_Framework_TestCase {

    public function gameDataProvider() {
        return [
            [['5H', '5C', '6S', '7S', 'KD'], ['2C', '3S', '8S', '8D', 'TD'], 1],
            [['5D', '8C', '9S', 'JS', 'AC'], ['2C', '5C', '7D', '8S', 'QH'], 0],
            [['2D', '9C', 'AS', 'AH', 'AC'], ['3D', '6D', '7D', 'TD', 'QD'], 1],
            [['4D', '6S', '9H', 'QH', 'QC'], ['3D', '6D', '7H', 'QD', 'QS'], 0],
            [['2H', '2D', '4C', '4D', '4S'], ['3C', '3D', '3S', '9S', '9D'], 0],
            [['2D', '2S', '2C', '3S', '3D'], ['AD', 'AS', 'AC', 'KS', 'KD'], 1],
            [['2D', '2C', '3S', '3S', '4C'], ['2D', '2C', '3S', '3S', '5C'], 1],
            [['2D', '2C', '2S', '4S', '9C'], ['2D', '2C', '2S', '3S', '9D'], 0],
            [['2D', '2C', '5S', '4S', '9C'], ['2D', '2C', '5S', '3S', '9D'], 0]
        ];
    }

    /**
     * @param $hand1
     * @param $hand2
     * @param $winner
     * @dataProvider gameDataProvider
     */
    public function testWinningHand($hand1, $hand2, $winner) {
        $player1 = new PokerHands($hand1);
        $player2 = new PokerHands($hand2);
        $game = new PokerGame();
        $ret = $game->whoWins($player1, $player2);
        $this->assertSame($winner, $ret);
    }

    public function testGetPlayer1WinnerCount()
    {
        $game = new PokerGame();
        $ret = $game->getPlayer1WinnerCount();
        $this->assertSame(376, $ret);
    }
}
