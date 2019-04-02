<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/30
 * Time: 18:16
 */
class Solution {
    function wordPattern($pattern, $str) {
        $words = explode(' ', $str);
        $pattern = str_split($pattern);
        return $str == strtr(implode(' ', $pattern), array_combine(array_unique($pattern), array_unique($words)));
    }
}
$pattern = "abba";
//$pattern = "";
$str = "dog cat cat dog";
//$str = 'beef';
var_export((new Solution())->wordPattern($pattern, $str));