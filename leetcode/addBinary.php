<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/22
 * Time: 20:18
 */
class Solution {
    function addBinary($a, $b) {
//        if (count($a) > count($b)) {
//            for ()
//        }
        return $a | $b;
        $a = bindec($a);
        $b = bindec($b);
        return decbin($a + $b);
    }
}
$a = '11';
$b = '1';
var_export((new Solution())->addBinary($a, $b));