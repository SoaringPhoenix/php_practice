<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/24
 * Time: 23:09
 */
class Solution {
    function reverse($x) {
        if ($x < 0) {
            $ret = intval(substr("-".strrev($x), 0, strlen($x)));
        }
        else {
            $ret =  intval(strrev($x));
        }
        ($ret > pow(2, 31) - 1 || $ret < -pow(2, 31)) && $ret = 0;
        return $ret;
    }
}
$x = -2147483412;
var_export((new Solution())->reverse($x));