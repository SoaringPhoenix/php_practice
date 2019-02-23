<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/23
 * Time: 21:24
 */
class Solution {
    function peakIndexInMountainArray($A) {
        return array_flip($A)[max($A)];
    }
}
$A = [0,10,5,2];
var_export((new Solution())->peakIndexInMountainArray($A));