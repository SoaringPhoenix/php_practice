<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/26
 * Time: 13:49
 */
class Solution {
    function kClosest($points, $K) {
        $arr = [];
        $ret = [];
        foreach ($points as $index => $point) {
            $arr[$index] = pow($point[0], 2) + pow($point[1], 2);
        }
        asort($arr);
        $arr = array_slice(array_flip($arr), 0, $K);
        foreach ($arr as $idx => $val) {
            $ret[$idx] = $points[$val];
        }
        return $ret;
    }
}
$points = [[1,3],[-2,2]];
$K = 1;
var_export((new Solution())->kClosest($points, $K));