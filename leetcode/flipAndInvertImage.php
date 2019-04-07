<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/22
 * Time: 14:49
 */
class Solution {
    function flipAndInvertImage($A) {
        foreach ($A as $index => $arr) {
            $A[$index] = array_reverse($A[$index]);
            foreach ($A[$index] as $idx => $num) {
                $num == 1 ? $A[$index][$idx] = 0 : $A[$index][$idx] = 1;
            }
        }
        return $A;
    }
}
$A = [[1,1,0],[1,0,1],[0,0,0]];
var_export((new Solution())->flipAndInvertImage($A));