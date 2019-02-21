<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/20
 * Time: 23:04
 */
$haystack = '123';
$needle = '0';
echo strpos($haystack, $needle);
$str = '1234';
var_dump(str_split($str));
class Solution {
    function numJewelsInStones($J, $S) {
        $num = 0;
        foreach (str_split($S) as $elem) {
            strpos($J, $elem) !== false && $num += 1;
        }
        return $num;
    }
}
$J = 'aA';
$S = 'aAAbbbb';
echo (new Solution())->numJewelsInStones($J, $S);