<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 15:14
 */
class Solution {
    function reverseString(&$S) {
        return array_reverse($S);
    }
}
$S = ["H","a","n","n","a","h"];
var_export((new Solution())->reverseString($S));