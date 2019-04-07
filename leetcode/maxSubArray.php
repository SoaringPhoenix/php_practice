<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/5
 * Time: 19:24
 */
class Solution {
    function maxSubArray($nums) {
        list($ret, $temp, $len) = [$nums[0], $nums[0], count($nums)];
        for ($i = 1; $i < $len; $i++) {
            $temp = $temp > 0 ? $nums[$i] + $temp : $nums[$i];
            $ret = $ret > $temp ? $ret : $temp;
        }
        return $ret;
    }
}