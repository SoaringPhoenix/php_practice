<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/23
 * Time: 21:47
 */
//echo strlen(18);
class Solution {
    function selfDividingNumbers($left, $right) {
        $arr = [];
        for ($i = $left; $i <= $right; $i++) {
            $arr[$i] = $i;
            for ($j = 1; $j < strlen($i); $j++) {
                if ($i % floor($i / $j) != 0) unset($arr[$i]); continue;
            }
        }
        return $arr;
    }
}
$left = 1;
$right = 22;
var_export((new Solution())->selfDividingNumbers($left, $right));