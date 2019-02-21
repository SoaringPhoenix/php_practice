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
        $arr = [];
        $count = [];
        foreach ($words as $index => $word) {
            foreach (str_split($word) as $idx => $letter) {
                $arr[$index][$idx] = $this->morse[ord($letter) - 97];
                $count[$index]['dot'] += substr_count($arr[$index][$idx], '.');
                $count[$index]['line'] += substr_count($arr[$index][$idx], '-');
            }
        }
        return count(array_unique($count));
    }
}
$words = ["gin", "zen", "gig", "msg"];
var_export((new Solution())->uniqueMorseRepresentations($words));