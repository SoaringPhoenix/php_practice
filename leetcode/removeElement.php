<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/19
 * Time: 13:15
 */
class Solution {
    function removeElement(&$nums, $val) {
        foreach ($nums as $index => $num) {
            if ($num == $val) {
                unset($nums[$index]);
            }
        }
        return count($nums);
    }
}
$nums = [0,1,2,2,3,0,4,2];
$val = 2;
var_export((new Solution())->removeElement($nums, $val));