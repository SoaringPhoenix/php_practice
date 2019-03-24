<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/22
 * Time: 20:18
 */
class Solution {
    function addBinary($a, $b) {
        $lenA = strlen($a);
        $lenB = strlen($b);
        if ($lenA > $lenB) {
            for ($i = 1; $i <= $lenA -  $lenB; $i++) {
                $b  = '0'.$b;
            }
        }
        if ($lenA < $lenB) {
            for ($i = 1; $i <= $lenB - $lenA; $i++) {
                $a = '0'.$a;
            }
        }
        $len = strlen($a) - 1;
        $ret = [];
        $a = strrev($a);
        $b = strrev($b);
        for ($i = 0; $i <= $len; $i++) {
            if ($a[$i] != $b[$i]) {
                $ret[$i] += 1;
            }
            if ($a[$i] + $b[$i] == 2) {
                $ret[$i + 1] = 1;
            }
            $ret[$i] += 0;
            if ($ret[$i] == 2) {
                $ret[$i] = 0;
                $ret[$i + 1] = 1;
            }
        }
//        return $ret;
        array_reverse($ret);
        return implode('', $ret);
        $a = bindec($a);
        $b = bindec($b);
        return decbin($a + $b);
    }
}
$a = '11';
$b = '10';
var_export((new Solution())->addBinary($a, $b));