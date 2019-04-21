<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/20
 * Time: 17:49
 */
include "sort.php";
class select extends sort {
    function sort($arr) {
        $len = count($arr);
        $this->printSelect($arr);
        foreach ($arr as $index => $value) {
            for ($idx = $index + 1; $idx < $len; $idx++) {  //选出最小元素
                if ($arr[$idx] < $arr[$index]) {
                    break;
                }
            }
            if ($idx != $index && $idx < $len) {    //执行swap
                $temp = $arr[$index];
                $arr[$index] = $arr[$idx];
                $arr[$idx] = $temp;
            }
            $this->printSelect($arr, $index);
        }
        return $arr;
    }

    function selectSort($arr) {
        $len = count($arr);
        $this->printSelect($arr);
        for ($index = 1; $index < $len / 2; $index++) { //只排序$len/2次
            list($min, $max) = [$index, $index];    //同时记录最大值和最小值
            for ($idx = $index + 1; $idx < $len - $index; $idx++) {
                if ($arr[$idx] > $arr[$max]) {
                    $max = $idx;
                }
                elseif ($arr[$idx] < $arr[$min]) {
                    $min = $idx;
                }
            }
            $temp = $arr[$index - 1];   //双管齐下，分别交换最大和最小
            $arr[$index - 1] = $arr[$min];
            $arr[$min] = $temp;
            $temp = $arr[$len - $index];
            $arr[$len - $index] = $arr[$max];
            $arr[$max] = $temp;
            $this->printSelect($arr, $index, 0);
        }
        return $arr;
    }
}
$arr = [3, 1, 5, 7, 2, 4, 9, 6];
//(new select())->sort($arr);
(new select())->selectSort($arr);