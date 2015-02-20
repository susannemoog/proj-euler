<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 20.02.15
 * Time: 15:53
 */

namespace P54;


class PokerHands
{

    public $cardsPlayer = [];
    public $cardsByKind = [
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

    public $specialHighCard = 0;


    public function __construct($cards)
    {
        foreach ($cards as $card) {
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
            $this->cardsByKind[$key] += 1;
        }
        $this->score = $this->scoreHand();
    }

    public function isRoyalFlush()
    {
        foreach ($this->cardsPlayer as $set) {
            if (array_sum($set) === 60) {
                return true;
            }
        }
        return false;
    }

    public function isStraightFlush()
    {
        foreach ($this->cardsPlayer as $colour => $set) {
            sort($set);
            foreach ($set as $index => $card) {
                if( isset($set[$index + 1]) && $set[$index + 1] == $card + 1 &&
                    isset($set[$index + 2]) && $set[$index + 2] == $card + 2 &&
                    isset($set[$index + 3]) && $set[$index + 3] == $card + 3 &&
                    isset($set[$index + 4]) && $set[$index + 4] == $card + 4
                ) {
                    $this->specialHighCard = $card + 4;
                    return true;
                } else {
                    return false;
                }
            }
        }
        return true;
    }

    public function isFourOfAKind()
    {
        if($key = array_search(4, $this->cardsByKind)) {
            $this->specialHighCard = $key;
            return true;
        }
        return false;
    }

    public function isFullHouse()
    {
        if (($key = array_search(3, $this->cardsByKind)) && in_array(2, $this->cardsByKind)) {
            $this->specialHighCard = $key;
            return true;
        }
        return false;
    }

    public function isFlush()
    {
        foreach ($this->cardsPlayer as $set) {
            if (count($set) === 5) {
                $this->specialHighCard = max($set);
                return true;
            }
        }
        return false;
    }

    public function isStraight()
    {
        foreach ($this->cardsByKind as $index => $count) {
            if ($count == 0) {
                continue;
            }
            if ($count == 1 &&
                !empty($this->cardsByKind[$index + 1]) &&
                !empty($this->cardsByKind[$index + 2]) &&
                !empty($this->cardsByKind[$index + 3]) &&
                !empty($this->cardsByKind[$index + 4])) {
                $this->specialHighCard = $index + 4;
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public function isThreeOfAKind()
    {
        if($key = array_search(3, $this->cardsByKind)) {
            $this->specialHighCard = $key;
            return true;
        }
        return false;
    }

    public function isTwoPairs()
    {
        $localCardsByKindCopy = $this->cardsByKind;
        if ($key = array_search(2, $localCardsByKindCopy)) {
            unset($localCardsByKindCopy[$key]);
        }
        if ($key2 = array_search(2, $localCardsByKindCopy)) {
            $this->specialHighCard = $key > $key2 ? $key : $key2;
            unset($this->cardsByKind[$key]);
            return true;
        }
        return false;
    }

    public function isOnePair()
    {
        if ($key = array_search(2, $this->cardsByKind)) {
            $this->specialHighCard = $key;
            unset($this->cardsByKind[$key]);
            return true;
        }
        return false;
    }

    public function scoreHand()
    {
        if ($this->isRoyalFlush()) {
            return 25000000000;
        }

        // - 22 363 880 490
        if ($this->isStraightFlush()) {
            return 1597420035 * $this->specialHighCard;
        }
        // - 1 597 420 020
        if ($this->isFourOfAKind()) {
            return 114101430 * $this->specialHighCard;
        }

        // - 114 101 414
        if ($this->isFullHouse()) {
            return 8150101 * $this->specialHighCard;
        }

        // - 8 150 086
        if ($this->isFlush()) {
            return 582149 * $this->specialHighCard;
        }
        // - 582134
        if ($this->isStraight()) {
            return 41581 * $this->specialHighCard;
        }
        // - 41566
        if ($this->isThreeOfAKind()) {
            return 2969 * $this->specialHighCard;
        }
        // - 2954
        if ($this->isTwoPairs()) {
            return 211 * $this->specialHighCard;
        }
        // 60 - 196
        if ($this->isOnePair()) {
            return 14 * $this->specialHighCard;
        }

        $handKinds = array_flip(array_filter($this->cardsByKind));
        return max($handKinds);
    }

}