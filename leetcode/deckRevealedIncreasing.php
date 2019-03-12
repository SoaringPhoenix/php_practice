<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/11
 * Time: 12:44
 */
class Solution {
    function deckRevealedIncreasing($deck) {
        sort($deck);
        $ret = [];
        $count = count($deck);
        $len = $count * 2;
        if ($len <= 2) {
            return $deck;
        }
        $ret[$len - 1] = $deck[--$count];
        $ret[$len - 2] = $deck[--$count];
        for ($i = $len - 4; $i >= 2; $i -= 2) {
            $end = $ret[--$len];
            $ret[$i] = $deck[--$count];
            $ret[$i + 1] = $end;
        }
        for ($i = 2; $i < $count + 2; $i++) {
            $deck[$i - 2] = $ret[$i];
        }
        return $deck;
    }
}
$deck = [17,13,11,2,3,5,7];
var_export((new Solution())->deckRevealedIncreasing($deck));