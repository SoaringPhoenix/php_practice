<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/2
 * Time: 23:19
 */
class Solution {
    function search($nums, $target) {
        if (empty($nums)) return -1;
        if (count($nums) == 1) {
            return $nums[0] == $target ? 0 : -1;
        }
        list($start, $end) = [0, count($nums) - 1];
        $mid = floor(($start + $end) / 2);
        while ($end >= $start) {
            if ($nums[$mid] == $target) {
                return $mid;
            }
            if ($nums[$mid] > $target) {
                $end = $mid - 1;
            }
            else {
                $start = $mid + 1;
            }
            $mid = floor(($start + $end) / 2);
        }
        return -1;
    }
}
$nums = [-1, 0, 3, 5, 9, 12];
$target = 9;
var_export((new Solution())->search($nums, $target));