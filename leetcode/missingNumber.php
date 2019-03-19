<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/19
 * Time: 13:20
 */
class Solution {
    function  missingNumber($nums) {
        $len = count($nums);
        $arr = [];
        for ($i = 0; $i <= $len; $i++) {
            $arr[] = $i;
        }
        return implode('', array_diff($arr, $nums));
    }
}
$nums = [0, 1];
var_export((new Solution())->missingNumber($nums));