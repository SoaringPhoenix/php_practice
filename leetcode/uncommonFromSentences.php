<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/12
 * Time: 20:56
 */
class Solution {
    function uncommonFromSentences($A, $B) {
        $arr = array_merge(explode(' ', $A), explode(' ', $B));
        $ret = [];
        foreach ($arr as $index => $elem) {
            if (count(array_keys($arr, $elem)) == 1) {
                array_push($ret, $elem);
            }
        }
        return $ret;
    }
}
$A = "apple apple";
$B = "banana";
var_export((new Solution())->uncommonFromSentences($A, $B));