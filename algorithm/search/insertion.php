<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/21
 * Time: 22:38
 */
class insertion {
    function search($arr, $target, $high, $low) {
        $mid = floor($low + ($target - $arr[$low]) / ($arr[$high] - $arr[$low]) * ($high - $low));
        if ($arr[$mid] == $target) {
            return $mid;
        }
        if ($arr[$mid] > $target) {
            return $this->search($arr, $target, $mid - 1, $low);
        }
        if ($arr[$mid] < $target) {
            return $this->search($arr, $target, $high, $mid + 1);
        }
        return -1;
    }
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
var_export((new insertion())->search($arr, 8, 7, 0));