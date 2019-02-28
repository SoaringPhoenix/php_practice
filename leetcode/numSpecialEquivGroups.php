<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/28
 * Time: 23:30
 */
class Solution {
    function numSpecialEquivGroups($A) {
        $ret = ['even'=> [], 'odd'=> []];
        foreach ($A as $index => $str) {
            $index % 2 == 0 && array_push($ret['even'], $str);
            $index % 2 != 0 && array_push($ret['odd'], $str);
        }
        return $ret;
    }
}
$A = ["a","b","c","a","c","c"];
var_export((new Solution())->numSpecialEquivGroups($A));