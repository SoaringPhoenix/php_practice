<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/18
 * Time: 13:03
 */
class Solution {
    function maxProfit($prices) {
        $accumulate = 0;
        foreach ($prices as $index => $price) {
            if ($price < $prices[$index + 1]) {
                $accumulate += $prices[$index + 1] - $price;
            }
        }
        return $accumulate;
    }
}
$prices = [7,1,5,3,6,4];
var_export((new Solution())->maxProfit($prices));