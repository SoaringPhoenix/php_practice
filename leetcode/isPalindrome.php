<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/24
 * Time: 23:01
 */
class Solution {
    function isPalindrome($x) {
        return $x == strrev($x);
    }
}
$x = -121;
var_export((new Solution())->isPalindrome($x));