<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/30
 * Time: 22:18
 */
class Solution {
    function frequencySort($s) {
        $arr = str_split($s);
        $frequency = [];
        foreach ($arr as $index => $char) {
            $frequency[$char] += 1;
        }
        arsort($frequency);
        $ret = [];
        foreach ($frequency as $index => $char) {
            for ($i = 1; $i <= $char; $i++) {
                $ret[] = $index;
            }
        }
        return implode('', $ret);
    }
}
$s = "tree";
var_export((new Solution())->frequencySort($s));