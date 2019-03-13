<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 16:08
 */
class Solution {
    function commonChars($A) {
        $count = [];
        $ret = [];
        foreach ($A as $index => $word) {
            $count[$index] = array_count_values(str_split($word));
//            $count = array_merge($count, array_count_values(str_split($word)));

        }
        foreach ($count as $index => $value) {
                foreach ($count($index) as $idx => $times) {

                }
        }
        return $count;
    }
}
$A = ["bella","label","roller"];
var_export((new Solution())->commonChars($A));