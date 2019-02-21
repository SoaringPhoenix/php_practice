<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/21
 * Time: 22:06
 */
class Solution {
    function repeatedNTimes($A) {
        return array_flip(array_count_values($A))[count($A) / 2];
    }
}
$arr = [1, 2, 3, 3];
var_export((new Solution())->repeatedNTimes($arr));