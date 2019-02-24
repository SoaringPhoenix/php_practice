<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/24
 * Time: 11:57
 */
class Solution {
    function sortArrayByParityII($A) {
        $arr = [];
        $even = 0;
        $odd = 1;
        foreach ($A as $index => $elem) {
            if ($elem % 2 == 0) {
                $arr[$even] = $elem;
                $even += 2;
            }
            else {
                $arr[$odd] = $elem;
                $odd += 2;
            }
        }
        ksort($arr);
        return $arr;
    }
}
$A = [4, 2, 5, 7];
var_export((new Solution())->sortArrayByParityII($A));