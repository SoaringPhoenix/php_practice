<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/21
 * Time: 18:47
 */
class Solution {
    function toLowerCase($str) {
        return strtolower($str);
    }
}
$str = 'Hello';
var_export((new Solution())->toLowerCase($str));