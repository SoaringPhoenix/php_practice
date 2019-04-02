<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/2
 * Time: 19:07
 */
class Solution {
    function sortColors(&$nums) {
        $arr = array_count_values($nums);
        $nums = [];
        for ($j = 0; $j <= 2; $j++) {
            for ($i = 0;$i < $arr[$j];$i++) {
                $nums[] = $j;
            }
        }
        return $nums;
    }
}
$nums = [2, 0, 2, 1, 1, 0];
var_export((new Solution())->sortColors($nums));