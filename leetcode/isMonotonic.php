<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/17
 * Time: 17:03
 */
class Solution {
    function isMonotonic($A) {
        if ($A[0] < $A[count($A) - 1]) {
            for ($i = 1; $i < count($A); $i++) {
                if ($A[$i - 1] > $A[$i]) {
                    return false;
                }
            }
        }
        else {
            for ($i = 1; $i < count($A); $i++) {
                if ($A[$i - 1] < $A[$i]) {
                    return false;
                }
            }
        }
        return true;
    }
}
$A = [1,3,2];
var_export((new Solution())->isMonotonic($A));