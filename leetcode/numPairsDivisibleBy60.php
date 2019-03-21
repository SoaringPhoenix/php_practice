<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/21
 * Time: 14:21
 */
class Solution {
    function numPairsDivisibleBy60($time) {
        $arr = [];
        $ret = 0;
        for ($i = count($time) - 1; $i >= 0; $i--) {
            $ret += $arr[(60 - $time[$i] % 60) % 60];
            $arr[$time[$i] % 60]++;
        }
        return $ret;
    }
}
$time = [60,60,60];
var_export((new Solution())->numPairsDivisibleBy60($time));