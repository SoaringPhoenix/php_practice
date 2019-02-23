<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/23
 * Time: 21:09
 */
class Solution {
    function findComplement($num) {
        $arr = str_split(decbin($num));
        foreach ($arr as $index => $elem) {
            $arr[$index] = chr(ord(1) + ord(0) - ord($elem));
        }
        return bindec(implode('', $arr));
    }
}
$num = 5;
var_export((new Solution())->findComplement($num));