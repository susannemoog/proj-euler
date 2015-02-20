<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 20.02.2015
 * Time: 19:16
 */

namespace P54;
class PokerGame {


    public function whoWins(PokerHands $player1, PokerHands $player2)
    {
        if ($player1->score > $player2->score) {
            return 0;
        }
        if ($player1->score < $player2->score) {
            return 1;
        }

        // same scores
        if ($player1->score == $player2->score) {
            $hand1 = max(array_flip(array_filter($player1->cardsByKind)));
            $hand2 = max(array_flip(array_filter($player2->cardsByKind)));
            if($hand1 > $hand2) {
                return 0;
            } elseif ($hand2 > $hand1) {
                return 1;
            }

            unset($player1->cardsByKind[$hand1]);
            unset($player2->cardsByKind[$hand2]);
            $hand1 = max(array_flip(array_filter($player1->cardsByKind)));
            $hand2 = max(array_flip(array_filter($player2->cardsByKind)));
            if($hand1 > $hand2) {
                return 0;
            } elseif ($hand2 > $hand1) {
                return 1;
            }

            unset($player1->cardsByKind[$hand1]);
            unset($player2->cardsByKind[$hand2]);
            $hand1 = max(array_flip(array_filter($player1->cardsByKind)));
            $hand2 = max(array_flip(array_filter($player2->cardsByKind)));
            if($hand1 > $hand2) {
                return 0;
            } elseif ($hand2 > $hand1) {
                return 1;
            }
        }
        return false;
    }

    public function getPlayer1WinnerCount(){
        $p1cnt = 0;
        $pokerGamesList = file_get_contents('../Ressources/p054_poker.txt');
        $pokerGames = explode("\n", $pokerGamesList);
        foreach($pokerGames as $game) {
            $cards = explode(' ', $game);
            $player1 = new PokerHands(array_slice($cards, 0, 5));
            $player2 = new PokerHands(array_slice($cards, 5, 5));
            if($this->whoWins($player1, $player2) === 0) {
                $p1cnt++;
            }
        }
        return $p1cnt;
    }
}