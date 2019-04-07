<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/6
 * Time: 20:23
 */
class Solution {
    function removeDuplicates($nums) {
        $nums = array_unique($nums);
        sort($nums);
        return $nums;
    }
}
$nums =  [0,0,1,1,1,2,2,3,3,4];
var_export((new Solution())->removeDuplicates($nums));