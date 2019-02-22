<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/22
 * Time: 19:44
 */
class Solution {
    function minDeletionSize($A) {
        $arr = [];
        $count = 0;
        foreach ($A as $index => $elems) {
            foreach (str_split($A[$index]) as $idx => $elem) {
                $arr[$idx][$index] = $elem;
                if ($index > 0 && $arr[$idx][$index - 1] > $arr[$idx][$index]) {
                    $count += 1;
                    continue;
                }
            }
        }
        return $count;
    }
}
$A = ["cba","daf","ghi"];
var_export((new Solution())->minDeletionSize($A));