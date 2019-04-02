<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/2
 * Time: 19:35
 */
class Solution {
    function backspaceCompare($S, $T) {
        $arrS = str_split($S);
        $arrT = str_split($T);
        foreach ($arrS as $index => $letter) {
            if ($letter == '#') {
                $arrS[$index - 1] = '';
                $arrS[$index] = '';
            }
        }
        foreach ($arrT as $index => $letter) {
            if ($letter == '#') {
                $arrT[$index - 1] = '';
                $arrT[$index] = '';
            }
        }
        return $arrS;
        return implode('', $arrS) == implode('', $arrT);
    }
}
$S = "ab##";
$T = "c#d#";
var_export((new Solution())->backspaceCompare($S, $T));