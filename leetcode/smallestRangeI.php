<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/28
 * Time: 13:05
 */
class Solution {
    function smallestRangeI($A, $K) {
        return (max($A) - min($A) - 2 * $K) < 0 ? 0 : (max($A) - min($A) - 2 * $K);
    }
}
$A = [1, 3, 6];
$K = 3;
var_export((new Solution())->smallestRangeI($A, $K));