<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 16:08
 */
class Solution {
    function commonChars($A) {
        $len = count($A);
        $count = [];
        foreach ($A as $index => $word) {
            foreach (str_split($word) as $idx => $letter) {
                $count[$index][ord($letter) - 97]++;
            }
        }
        return $count;
        $ret = [];
        for ($i = 0; $i < 26; $i++) {
            $min = 100;
            for ($j = 0; $j < $len; $j++) {
                $min = min($min, $count[$j][$i]);
            }
            for ($j = 0; $j < $min; $j++) {
                $ret[] = chr($i + 97);
            }
        }
        return $ret;
    }
}
$A = ["cool","lock","cook"];
var_export((new Solution())->commonChars($A));