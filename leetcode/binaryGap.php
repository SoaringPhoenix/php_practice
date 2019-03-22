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
        $arr = str_split($N);
        $start = -1;
        $length = [0];
        foreach ($arr as $index => $item) {
            if (($length[0] == 0 || $arr[$index - 1] == 0) && $item == 1) {
                $start = $index;
                continue;
            }
            if ($start != -1 && $index != $start && $item == 1 && ($arr[$index + 1] == 0 || $index == count($arr) - 1)) {
                $length[] = $index - $start;
                continue;
            }
        }
        return $length;
    }
}
$N = 5;
array ( 0 => '1', 1 => '0', 2 => '1', );
var_export((new Solution())->binaryGap($N));