<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/19
 * Time: 18:30
 */
class Solution {
    function isOneBitCharacter($bits) {
        if (max($bits) == 0) {
            return true;
        }
        return count($bits) & 1 && $bits[count($bits) - 1] == 0;
    }
}
$bits = [1, 1, 1, 0];
var_export((new Solution())->isOneBitCharacter($bits));