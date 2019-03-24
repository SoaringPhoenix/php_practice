<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/24
 * Time: 23:09
 */
class Solution {
    function reverse($x) {
        if ($x > 2 ^ 31 - 1 || $x < - (2 ^ 31) - 1) {
            return 0;
        }
        if ($x < 0) {
            return intval(substr("-".strrev($x), 0, strlen($x)));
        }
        return intval(strrev($x));
    }
}
$x = 120;
var_export((new Solution())->reverse($x));