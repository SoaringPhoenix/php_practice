<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/19
 * Time: 12:58
 */
class Solution {
    function generate($numRows) {
        $ret = [];
        for ($i = 0; $i < $numRows; $i++) {
            $ret[$i][0] = 1;
            for ($j = 1; $j <= $i; $j++) {
                $ret[$i][$j] = $ret[$i - 1][$j] + $ret[$i - 1][$j - 1];
            }
        }
        return $ret;
    }
}
$numRows = 5;
var_export((new Solution)->generate($numRows));