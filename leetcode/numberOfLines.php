<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 13:05
 */
class Solution {
    function numberOfLines($widths, $S) {
        $len = 0;
        $lines = 1;
        foreach (str_split($S) as $letter) {
            $len += $widths[ord($letter) - 97];
            if ($len >= 100) {
                $lines += 1;
                $len == 100 ? $len = 0 : $len = $widths[ord($letter) - 97];
                continue;
            }
        }
        return [$lines, $len];
    }
}
$widths =  [10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10];
$S = "abcdefghijklmnopqrstuvwxyz";
var_export((new Solution())->numberOfLines($widths, $S));