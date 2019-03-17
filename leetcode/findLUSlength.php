<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/16
 * Time: 21:43
 */
class Solution {
    function findLUSlength($a, $b) {
        return $a == $b ? -1 : max(strlen($a), strlen($b));
    }
}
$a = "aefawfawfawfaw";
$b = "aefawfeawfwafwaef";
var_export((new Solution())->findLUSlength($a, $b));