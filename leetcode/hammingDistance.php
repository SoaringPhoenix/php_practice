<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/23
 * Time: 19:35
 */
class Solution {
    function hammingDistance($x, $y) {
        return 102 ^ 109 ^ 109;
        return substr_count(decbin($x ^ $y), '1');
    }
}
$x = 1;
$y = 4;
var_export((new Solution())->hammingDistance($x, $y));