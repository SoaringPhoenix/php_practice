<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/25
 * Time: 12:35
 */
class Solution {
    function isUgly($num) {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if (is_int($num / $i)) {
                if (!in_array($i, [2, 3, 5]) || !in_array($num / $i, [2, 3, 5])) {
                    return false;
                }
            }
        }
        return true;
    }
}
$num = 14;
var_export((new Solution())->isUgly($num));