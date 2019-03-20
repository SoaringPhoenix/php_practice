<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/20
 * Time: 19:10
 */
class Solution {
    function maxProfit($prices) {
        $min = $prices[0];
        $profit = 0;
        foreach ($prices as $index => $price) {
            if ($price < $min) {
                $min = $price;
            }
            if ($price - $min > $profit) {
                $profit = $price - $min;
            }
        }
        return $profit;
    }
}
$prices = [7, 1, 5, 3, 6, 4];
var_export((new Solution())->maxProfit($prices));