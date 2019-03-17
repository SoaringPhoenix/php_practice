<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/17
 * Time: 21:03
 */
class Solution {
    function findDisappearedNumbers($nums) {
        $len = count($nums);
        $arr = [];
        for ($i = 1; $i <= $len; $i++) {
            $arr[] = $i;
        }
        return array_diff($arr, $nums);
    }
}
$nums = [4,3,2,7,8,2,3,1];
var_export((new Solution())->findDisappearedNumbers($nums));