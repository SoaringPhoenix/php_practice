<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/22
 * Time: 19:45
 */
class Solution {
    function mySqrt($x) {
        return intval(floor(sqrt($x)));
    }
}
$x = 8;
var_export((new Solution())->mySqrt($x));