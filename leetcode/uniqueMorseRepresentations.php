<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/21
 * Time: 19:09
 */
class Solution {
private $morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.",
    "--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
    function uniqueMorseRepresentations($words) {
        foreach ($words as $index => $word) {
            $arr = str_split($word);
            foreach ($arr as $idx => $letter) {
                $arr[$idx] = $this->morse[ord($letter) - 97];
            }
            $words[$index] = implode('', $arr);
        }
        return count(array_unique($words));
    }
}
$words = ["gin", "zen", "gig", "msg"];
var_export((new Solution())->uniqueMorseRepresentations($words));