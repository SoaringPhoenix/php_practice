<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/22
 * Time: 19:50
 */
class Solution {
    function checkPerfectNumber($num) {
        $ret = $num;
        for ($i = 1; $i <= sqrt($num); $i++) {
            if (is_int($num / $i)) {
                $ret -= $i;
                $i != 1 && $ret -= $num / $i;
            }
        }
        return ($ret !== 0 || $num <= 1) ? false : true;
    }
}
$num = 1;
var_export((new Solution())->checkPerfectNumber($num));