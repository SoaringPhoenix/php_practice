<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/28
 * Time: 19:13
 */
class Solution
{
    function findWords($words) {
        $alphabet = ['qwertyuiop', 'asdfghjkl', 'zxcvbnm'];
        foreach ($words as $index => $word) {
            $spot = 0;
            stripos($alphabet[1], $words[$index][0]) !== false && $spot = 1;
            stripos($alphabet[2], $words[$index][0]) !== false && $spot = 2;
            foreach (str_split($words[$index]) as $idx => $letter) {
                if ($idx > 0) {
                    if (stripos($alphabet[$spot], $letter) == false) {
                        unset($words[$index]);
                        break;
                    }
                }
            }
        }
        return $words;
    }
}
$words = ["Hello", "Alaska", "Dad", "Peace"];
var_export((new Solution())->findWords($words));