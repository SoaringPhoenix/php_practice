<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/21
 * Time: 20:27
 */
class binary {
    function searchSplit($arr, $target) {
        list($low, $high) = [0, count($arr) - 1];
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($arr[$mid] == $target) {
                return $mid;
            }
            if ($arr[$mid] > $target) {
                $high = $mid - 1;
            }
            else {
                $low = $mid + 1;
            }
        }
        return -1;
    }

    function searchRecursive($arr, $target, $high, $low) {
        $mid = floor(($low + $high) / 2);
        if ($arr[$mid] == $target) {
            return $mid;
        }
        if ($arr[$mid] > $target) {
            return $this->searchRecursive($arr, $target, $mid - 1, $low);
        }
        if ($arr[$mid] < $target) {
            return $this->searchRecursive($arr, $target, $high, $mid + 1);
        }
        return -1;
    }
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
var_export((new binary())->searchRecursive($arr, 4, 7, 0));
//var_export((new binary())->searchSplit($arr, 5));