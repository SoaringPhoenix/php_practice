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
        $ret = [];
        $start = 0;
        $end = count($array);
        foreach ($array as $index => $arr) {
            if ($arr == 'D') {
                $ret[$index] = $end;
                $end -= 1;
            }
            else {
                $ret[$index] = $start;
                $start += 1;
            }
        }
        $ret[count($array)] = $array[count($array) -1] == 'D' ? $start : $end;
        return $ret;
    }
}
$S = "IDID";
var_export((new Solution())->diStringMatch($S));