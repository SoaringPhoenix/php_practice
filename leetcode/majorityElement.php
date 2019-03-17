<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/17
 * Time: 21:28
 */
class Solution {
    function majorityElement($nums) {
        list($maj, $count) = [$nums[0], 0];
        foreach ($nums as $index => $num) {
            if ($num == $maj) {
                $count++;
            }
            elseif (--$count == 0) {
                $maj = $num;
                $count = 1;
            }
        }
        return $maj;
    }
}
$nums = [2,2,1,1,1,2,2];
var_export((new Solution())->majorityElement($nums));