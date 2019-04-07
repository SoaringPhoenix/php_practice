<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/6
 * Time: 17:41
 */
class Solution {
    function findMaxAverage($nums, $k) {
        list($ret, $len) = [[], count($nums)];
        for ($i = 0; $i <= $len - $k; $i++) {
            for ($j = $i; $j < $i + $k; $j++) {
                $ret[$i] += $nums[$j];
            }
        }
        return max($ret) / $k;
    }
}
$nums = [1, 12, -5, -6, 50, 3];
$k = 4;
var_export((new Solution())->findMaxAverage($nums, $k));