<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/14
 * Time: 14:56
 */
class Solution {
    function climbStairs($n) {
        if ($n <= 2) {
            return $n;
        }
        list($yest, $before, $all) = [2, 1, 0];
        for ($i = 2; $i < $n; $i++) {
            $all = $yest + $before;
            $before = $yest;
            $yest = $all;
        }
        return $all;
    }
}
$n = 4;
$arr = [
    [1, 1, 1, 1],
    [1, 1, 2],
    [1, 2, 1],
    [2, 1, 1],
    [2, 2]
];
var_export((new Solution())->climbStairs($n));