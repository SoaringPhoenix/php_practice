<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/31
 * Time: 15:42
 */
class Solution {
    function firstUniqChar($s) {
        $arr = str_split($s);
        $count = array_count_values($arr);
        $ret = [];
        foreach ($count as $index => $num) {
            if ($num > 1) {
                continue;
            }
            $ret[] = array_search($index, $arr);
        }
        return empty($ret) || empty($s) ? -1 : min($ret);
    }
}
$s = 'leetcode';
var_export((new Solution())->firstUniqChar($s));