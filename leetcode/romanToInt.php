<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/24
 * Time: 17:08
 */
class Solution {
    private $roman = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    function romanToInt($s) {
        $value = 0;
        $word = str_split($s);
        foreach ($word as $index => $letter) {
            if ($this->roman[$letter] < $this->roman[$word[$index + 1]]) {
                $value -= $this->roman[$letter];
            }
            else {
                $value += $this->roman[$letter];
            }
        }
        return $value;
    }
}
$s = "MCMXCIV";
var_export((new Solution())->romanToInt($s));