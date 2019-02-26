<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/26
 * Time: 13:02
 */
//class Solution {
//    function fib($N) {
//        $arr = [0, 1];
//        for ($i = 2; $i <= $N; $i++) {
//            $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
//        }
//        return $arr[$N];
//    }
//}
class Solution {
    function fib($N) {
        $arr = [0, 1];
        if ($N == 0) {
            return 0;
        }
        if ($N == 1) {
            return 1;
        }
        $counter = 0;
        while ($counter <= $N) {
            $arr[$counter % 2] = $arr[0] + $arr[1];
            $counter++;
        }
        return $arr[($counter - 1) % 2];
    }
}
$N = 4;
var_export((new Solution())->fib($N));