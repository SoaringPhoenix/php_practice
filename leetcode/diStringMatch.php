<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/22
 * Time: 17:23
 */
class Solution {
    function diStringMatch($S) {
        $array = str_split($S);
        $ret = [0];
        foreach ($array as $index => $arr) {
            $array[$index] == 'I' ? $ret[$index + 1] = $ret[$index] + 1 : $ret[$index + 1] = $ret[$index] - 1;
        }
        return $ret;
    }
}
$S = "IDID";
var_export((new Solution())->diStringMatch($S));