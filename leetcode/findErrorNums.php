<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/1
 * Time: 12:40
 */
class Solution {
    function findErrorNums($nums) {
        $arr = array_count_values($nums);
        $ret = [];
        foreach ($arr as $index => $count) {
            if ($count == 2) {
                $ret[] = $index;
            }
        }
        $len = count($nums);
        $sum = (1+ $len) * $len / 2;
        $ret[] = $sum - array_sum($nums) + $ret[0];
        return $ret;
    }
}
$nums = [1,5,3,2,2,7,6,4,8,9];
var_export((new Solution())->findErrorNums($nums));