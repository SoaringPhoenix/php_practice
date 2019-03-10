<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 18:18
 */
class Solution {
    function transpose($A) {
        $ret = [];
        foreach ($A as $index => $row) {
            foreach ($A[$index] as $idx => $col) {
                $ret[$idx][$index] = $col;
            }
        }
        return $ret;
    }
}
$A = [[1,2,3],[4,5,6],[7,8,9]];
var_export((new Solution())->transpose($A));