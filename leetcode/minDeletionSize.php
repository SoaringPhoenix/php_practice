<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/22
 * Time: 19:44
 */
class Solution {
    function minDeletionSize($A) {
        $arr = [];
        foreach ($A as $index => $elems) {
            foreach (str_split($A[$index]) as $idx => $elem) {
                $arr[$idx][$index] = $elem;
                if ($index > 0 && $arr[$idx][$index - 1] > $arr[$idx][$index]) {
                    $arr[strlen($A[0]) + $idx] = 1;
                    continue;
                }
            }
        }
        return count($arr) -  strlen($A[0]);
    }
}
$A = ["a","b"];
var_export((new Solution())->minDeletionSize($A));