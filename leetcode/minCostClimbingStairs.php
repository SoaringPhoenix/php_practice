<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/20
 * Time: 13:08
 */
class Solution {
    function minCostClimbingStairs($cost) {
        for ($i = count($cost) - 3; $i >= 0; $i--) {
            $cost[$i] = $cost[$i] + min($cost[$i + 1], $cost[$i + 2]);
        }
        return min($cost[0], $cost[1]);
    }
}
$cost = [0, 0, 2, 1];
var_export((new Solution())->minCostClimbingStairs($cost));