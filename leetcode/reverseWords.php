<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 15:50
 */
class Solution {
    function reverseWords($s) {
        $arr = explode(' ', $s);
        foreach ($arr as $index => $word) {
            $arr[$index] = strrev($word);
        }
        return implode(' ', $arr);
    }
}
$s = "Let's take LeetCode contest";
var_export((new Solution())->reverseWords($s));