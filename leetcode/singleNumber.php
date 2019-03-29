<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 16:05
 */
class Solution {
    function singleNumber($nums) {
        return array_flip(array_count_values($nums))[1];
    }
}
$nums = [2, 2, 1];
$nums = [4,1,2,1,2];
var_export((new Solution())->singleNumber($nums));