<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/28
 * Time: 23:30
 */
class Solution {
    function numSpecialEquivGroups($A) {
        foreach ($A as $index => $str) {
            if ($index > 0) {
                if ($this->in_array($str, array_slice($A, 0, $index))) unset($A[$index]);
            }
        }
        return count($A);
    }

    function in_array($str, $refer) {
        foreach ($refer as $index => $word) {
            if ($this->equiv($str, $word)) {
                return true;
            }
        }
        return false;
    }

    function equiv($str1, $str2) {
        $arr1 = [[], []];
        $arr2 = [[], []];
        foreach (str_split($str1) as $index => $letter) {
            $index % 2 == 0 && array_push($arr1[0], $letter);
            $index % 2 != 0 && array_push($arr1[1], $letter);
        }
        foreach (str_split($str2) as $index => $letter) {
            $index % 2 == 0 && array_push($arr2[0], $letter);
            $index % 2 != 0 && array_push($arr2[1], $letter);
        }
        sort($arr1[0]);
        sort($arr1[1]);
        sort($arr2[0]);
        sort($arr2[1]);
        if ($arr1 == $arr2) {
            return true;
        }
        return false;
    }
}
$A = ["a","b","c","a","c","c"];
var_export((new Solution())->numSpecialEquivGroups($A));