<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/14
 * Time: 19:56
 */
class Solution {
    function fairCandySwap($A, $B) {
        $diff = (array_sum($B) - array_sum($A)) / 2;
        $ret = [];
        foreach ($A as $index => $value) {
            foreach ($B as $idx => $elem) {
                if ($elem - $value == $diff) {
                    array_push($ret, $A[$index]);
                    array_push($ret, $B[$idx]);
                    return $ret;
                }
            }
        }
        return $ret;
    }
}
$A = [2];
$B = [1,3];
var_export((new Solution())->fairCandySwap($A, $B));