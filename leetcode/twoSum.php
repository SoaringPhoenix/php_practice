<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/18
 * Time: 13:20
 */
//$a = [0, 0, 3, 4];
//var_export(array_keys($a, 0));
class Solution {
    function twoSum($numbers, $target) {
        $start = 0;
        $end = count($numbers) - 1;
        while ($start < $end) {
            $sum = $numbers[$start] + $numbers[$end];
            if ($sum == $target) {
                return [$start + 1, $end + 1];
            }
            if ($sum > $target) {
                $end--;
            }
            else {
                $start++;
            }
        }
    }
}
$numbers = [2,7,11,15];
$target = 9;
var_export((new Solution())->twoSum($numbers, $target));