<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/5
 * Time: 18:32
 */
class Solution {
    function pivotIndex($nums) {
        $full = array_sum($nums);
        $sum = 0;
        foreach ($nums as $index => $num) {
            if ($sum == $full - $sum - $nums[$index + 1]) {
                return $index + 1;
            }
            $sum += $num;
        }
        return -1;
    }
}