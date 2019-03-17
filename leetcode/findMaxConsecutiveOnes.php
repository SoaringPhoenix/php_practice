<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/17
 * Time: 18:56
 */
class Solution {
    function findMaxConsecutiveOnes($nums) {
        $str = implode('', $nums);
        $arr = explode('0', $str);
        return strlen(max($arr));
    }
}
$nums = [1, 1, 0, 1, 1, 1];
var_export((new Solution())->findMaxConsecutiveOnes($nums));