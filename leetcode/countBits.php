<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/12
 * Time: 18:42
 */
class Solution {
    function countBits($num) {
        $ret[0] = 0;
        for ($i = 1; $i <= $num; $i++) {
            $ret[$i] = $ret[$i >> 1] + ($i & 1);
        }
        return $ret;
    }
}
$num = 5;
var_export((new Solution())->countBits($num));