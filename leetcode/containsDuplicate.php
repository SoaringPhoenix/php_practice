<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/18
 * Time: 13:11
 */
class Solution {
    function containsDuplicate($nums) {
        $seen = [];
        foreach ($nums as $num) {
            if (isset($seen[$num])) {
                return true;
            }
            $seen[$num] = $num;
        }
        return false;
    }
}
$nums = [1, 2, 3, 1];
var_export((new Solution())->containsDuplicate($nums));