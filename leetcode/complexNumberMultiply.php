<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/12
 * Time: 16:31
 */
class Solution {
    function complexNumberMultiply($a, $b) {
        $aReal = intval(explode('+', $a)[0]);
        $aIma = intval(substr(explode('+', $a)[1], 0, strlen(explode('+', $a)[1]) - 1));
        $bReal = intval(explode('+', $b)[0]);
        $bIma = intval(substr(explode('+', $b)[1], 0, strlen(explode('+', $b)[1]) - 1));
        return ($aReal * $bReal - $aIma * $bIma)."+".($aReal * $bIma + $aIma * $bReal)."i";
    }
}
$a = '1+1i';
$b = '1+1i';
var_export((new Solution())->complexNumberMultiply($a, $b));