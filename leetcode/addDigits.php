<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/24
 * Time: 16:45
 */
class Solution {
    function addDigits($num) {
        $count = 0;
        while (strlen($num) > 1) {
            foreach (str_split($num) as $index => $value) {
                $count += $value;
            }
            $num = $count;
            $count = 0;
        }
        return $num;
    }
}
$num = 28;
var_export((new Solution())->addDigits($num));