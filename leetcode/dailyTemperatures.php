<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/31
 * Time: 23:31
 */
class Solution {
    function dailyTemperatures($T) {
        $len = count($T);
        $ret = [];
        foreach ($T as $index => $temp) {
            for ($i = $index + 1; $i < $len; $i++) {
                if ($T[$i] > $temp) {
                  $ret[] = $i - $index;
                  continue 2;
                }
            }
            $ret[] = 0;
            continue;
        }
        return $ret;
    }
}
$T = [73, 74, 75, 71, 69, 72, 76, 73];
var_export((new Solution())->dailyTemperatures($T));