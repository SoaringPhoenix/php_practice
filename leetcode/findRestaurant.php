<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/31
 * Time: 13:50
 */
class Solution {
    function findRestaurant($list1, $list2) {
        $arr = [];
        $listOne = array_flip($list1);
        foreach ($list2 as $index => $restaurant) {
            if (in_array($restaurant, $list1)) {
                $arr[$index + $listOne[$restaurant]] = $restaurant;
            }
        }
        ksort($arr);
        return array_shift($arr);
    }
}
$list1 = ["Shogun", "Tapioca Express", "Burger King", "KFC"];
$list2 = ["KFC", "Shogun", "Burger King"];
var_export((new Solution())->findRestaurant($list1, $list2));