<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/16
 * Time: 20:24
 */
class Solution {
    function countSubstrings($s) {
        $ret = [];
        $count = 0;
        for ($i = 0; $i < strlen($s); $i += 1) {
            for ($j = $i;$j < strlen($s); $j += 1) {
                if ($this->isPalindrominc($i, $j, $s)) {
                    $ret[] = substr($s, $i, $j - $i + 1);
                    $count += 1;
                }
            }
        }
        return $count;
    }
    function isPalindrominc($start, $end, $str) {
        if ($start > $end) {
            return true;
        }
        if ($str[$start] != $str[$end]) {
            return false;
        }
        return $this->isPalindrominc($start + 1, $end - 1, $str);
    }
}
$s = 'abc';
var_export((new Solution())->countSubstrings($s));