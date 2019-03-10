<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 13:33
 */
class Solution {
    function shortestToChar($S, $C) {
        $ret = [];
        $arr = array_keys(str_split($S), $C);
        foreach (str_split($S) as $index => $letter) {
            foreach ($arr as $idx => $value) {
                $ret[$index][$idx] = abs($index - $value);
            }
            $ret[$index] = min($ret[$index]);
        }
        return $ret;
    }
}
$S = "loveleetcode";
$C = 'e';
var_export((new Solution())->shortestToChar($S, $C));