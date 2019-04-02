<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 16:14
 */
class Solution {
    function distributeCandies($candies) {
        return count(array_unique($candies)) > count($candies) / 2 ? count($candies) / 2 : count(array_unique($candies));
    }
}
//$candies = [1, 1, 2, 2, 3, 3];
$candies = [1,1,2,3];
//$candies = [1,1,2,2,3,3, 2, 3, 4, 5];
var_export((new Solution())->distributeCandies($candies));