<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/31
 * Time: 14:47
 */
class Solution {
    function topKFrequent($nums, $k) {
        $arr = array_count_values($nums);
        arsort($arr);
        $ret = [];
        $count = 0;
        foreach ($arr as $index => $num) {
            if ($count == $k) {
                break;
            }
            $ret[] = $index;
            $count += 1;
        }
        return $ret;
    }
}
$nums = [1, 1, 1, 2, 2, 3];
$k = 2;
var_export((new Solution())->topKFrequent($nums, $k));