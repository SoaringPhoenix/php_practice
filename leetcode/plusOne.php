<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/21
 * Time: 13:05
 */
class Solution {
    function plusOne($digits) {
        $len = count($digits) -1;
        for ($i = $len; $i >= 0; $i--) {
            $digits[$i] += 1;
            if ($digits[$i] != 10) {
                break;
            }
            else {
                $digits[$i] = 0;
            }
        }
        if (max($digits) == 0) {
            $digits[0] = 1;
            $digits[$len + 1] = 0;
        }
        return $digits;
    }
}
$digits = [9];
var_export((new Solution())->plusOne($digits));