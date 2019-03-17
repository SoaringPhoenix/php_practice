<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/16
 * Time: 22:07
 */
class Solution {
    function reverseOnlyLetters($S) {
        $first = 0;
        $last = strlen($S) - 1;
        while ($first < $last) {
            if (preg_match("/[A-Za-z]/", $S[$first]) && preg_match("/[A-Za-z]/", $S[$last])) {
                $temp = $S[$last];
                $S[$last] = $S[$first];
                $S[$first] = $temp;
                $first++;
                $last--;
            }
            !preg_match("/[A-Za-z]/", $S[$first]) && $first++;
            !preg_match("/[A-Za-z]/", $S[$last]) && $last--;
        }
        return $S;
    }
}
$S = "a-bC-dEf-ghIj";
var_export((new Solution())->reverseOnlyLetters($S));