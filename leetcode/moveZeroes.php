<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/17
 * Time: 20:31
 */
class Solution {
    function moveZeroes(&$nums) {
        foreach ($nums as $index => $num) {
            if ($num == '0') {
                unset($nums[$index]);
                array_push($nums, '0');
            }
        }
    }
}
$nums = [0, 1, 0, 3, 12];
var_export((new Solution())->moveZeroes($nums));