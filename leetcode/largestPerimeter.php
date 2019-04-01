<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/1
 * Time: 20:42
 */
class Solution {
    function largestPerimeter($A) {
        sort($A);
        $len = count($A);
        $perimeter = 0;
        for ($i = $len - 1; $i >= 0; $i--) {
            var_export($A[$i]);echo "\n";
            var_export($A[$i-1]);echo "\n";
            var_export($A[$i-2]);echo '<br>';
            if ($A[$i] < $A[$i - 1] + $A[$i - 2]) {
                $perimeter = $A[$i] + $A[$i - 1] + $A[$i - 2];
                break;
            }
        }
        return $perimeter;
    }
}
$A = [2, 3, 4, 4, 10];
var_export((new Solution())->largestPerimeter($A));