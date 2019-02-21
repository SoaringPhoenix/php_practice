<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/21
 * Time: 22:15
 */
class Solution {
    function sortedSquares($A) {
        $arr = [];
        foreach ($A as $index => $elem) {
            $arr[$index] = pow($elem, 2);
        }
        sort($arr);
        return $arr;
    }
}
$A = [-4,-1,0,3,10];
var_export((new Solution())->sortedSquares($A));