<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/18
 * Time: 20:51
 */
class Solution {
    function findShortestSubArray($nums) {
        $degree = max(array_count_values($nums));
        foreach ($nums as $index => $num) {

        }
        return $degree;
    }
}
$nums = [1, 2, 2, 3, 1];
var_export((new Solution())->findShortestSubArray($nums));