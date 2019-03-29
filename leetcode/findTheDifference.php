<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 17:33
 */
class Solution {
    function findTheDifference($s, $t) {
        $s = str_split($s);
        $t = str_split($t);
        sort($s);
        sort($t);
        foreach ($t as $index => $letter) {
                if ($letter != $s[$index]) {
                    return $letter;
                }
        }
        return '';
    }
}
$s = 'abcd';
$t = 'abcde';
var_export((new Solution())->findTheDifference($s, $t));
