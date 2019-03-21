<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/21
 * Time: 20:03
 */
class Solution {
    function binaryGap($N) {
        $N = decbin($N);
        $arr = [];
        for ($i = 0; $i < strlen($N); $i++) {
            if ($N[$i] == 1) {
//                $arr[] = $i;
                $arr[] = $i - $arr[count($arr) - 2];
            }
        }
//        return $arr;
        return max($arr);
    }
}
$N = 15;
var_export((new Solution())->binaryGap($N));