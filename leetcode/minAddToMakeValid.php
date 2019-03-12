<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/12
 * Time: 13:57
 */
class Solution {
    function minAddToMakeValid($S) {
        $pre = 0;
        $pro = 0;
        foreach (str_split($S) as $bracket) {
            $bracket === '(' && $pre += 1;
            $bracket === ')' && ($pre > 0 ? $pre -= 1 : $pro += 1);
        }
        return $pre + $pro;
    }
}
$S = "()))((";
var_export((new Solution())->minAddToMakeValid($S));