<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/6
 * Time: 11:32
 */
class Solution {
    function searchInsert($nums, $target) {
        $index = array_search($target, $nums);
        if ($index !== false) {
            return $index;
        }
        foreach ($nums as $idx => $num) {
            if ($target < $num) {
                return $idx;
            }
        }
        return count($nums);
    }
}