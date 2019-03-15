<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/16
 * Time: 0:07
 */
class Solution {
    function toGoatLatin($S) {
        $sentence = explode(' ', $S);
        foreach ($sentence as $index => $word) {
            if (in_array(str_split(strtolower($word))[0], ['a', 'e', 'i', 'o', 'u'])) {
                $sentence[$index] .= 'ma';
            }
            else {
                $sentence[$index] = substr($word,1).$word[0].'ma';
            }
            for ($i = 0; $i <= $index; $i++) {
                $sentence[$index] .= 'a';
            }
        }
        return implode(' ', $sentence);
    }
}
$S = "The quick brown fox jumped over the lazy dog";
var_export((new Solution())->toGoatLatin($S));