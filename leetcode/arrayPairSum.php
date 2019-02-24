<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/24
 * Time: 11:29
 */
class Solution {
    function arrayPairSum($nums) {
        sort($nums);
        $sum = 0;
        for ($i = 0; $i < count($nums); $i += 2) {
            $sum += $nums[$i];
        }
        return $sum;
    }
}
$nums = [1, 4, 3, 2];
var_export((new Solution())->arrayPairSum($nums));