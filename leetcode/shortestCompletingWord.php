<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 17:09
 */
class Solution {
    function shortestCompletingWord($licensePlate, $words) {
        $licensePlate =  str_replace(' ', '',preg_filter('/\\d+/', '', $licensePlate));
    }
}
$licensePlate = "1s3 Pst";
var_export((new Solution())->shortestCompletingWord($licensePlate, '1'));