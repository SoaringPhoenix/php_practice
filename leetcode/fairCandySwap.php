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
            if (($key = array_search($value+ $diff, $B)) !== false) {
                $ret[] = $value;
                $ret[] = $B[$key];
                return $ret;
            }
        }
        return $ret;
    }
}
$A = [1, 2];
$B = [2, 3];
var_export((new Solution())->fairCandySwap($A, $B));