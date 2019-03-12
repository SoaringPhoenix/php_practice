<?php

/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/11
 * Time: 13:15
 */
class Solution
{
    function findAndReplacePattern($words, $pattern)
    {
        $rule = [];
        $act = [];
        $count = 1;
        foreach (str_split($pattern) as $index => $letter) {
            $rule[$index] = 0;
            if ($index == strlen($pattern) - 1) break;
            if ($letter === str_split($pattern)[$index + 1]) {
                $rule[$index] = 1;
                continue;
            }
            if (count(array_keys($rule, $letter)) > 1) {

            }
        }
        foreach ($words as $index => $word) {
            foreach (str_split($word) as $idx => $letter) {
                $act[$index][$idx] = 0;
                if ($idx == strlen($word) - 1) break;
                if ($letter === str_split($word)[$idx + 1]) {
                    $act[$index][$idx] = 1;
                    continue;
                }
            }
            if ($act[$index] !== $rule) {
                unset($words[$index]);
            }
        }
        return $words;
    }
}
$words = ["abc","deq","mee","aqq","dkd","ccc"];
$pattern = "abb";
var_export((new Solution())->findAndReplacePattern($words, $pattern));