<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/20
 * Time: 16:43
 */
include "sort.php";
class shell extends sort {
    /**
     * @param $arr
     * 增量依次减半，依次执行对应增量的直接插入排序(直接插入排序默认增量为1)
     * @return array
     */
    function shellSort($arr) {
        $dk = count($arr) / 2;
        $this->printShell($arr, 0);
        while ($dk >= 1) {
            $this->printShell($arr, 0, $dk);
            $arr = $this->shellInsertSort($arr, $dk);
            $dk /= 2;
        }
        return $arr;
    }

    /**
     * @param $arr
     * @param $dk
     * 执行增量为$dk的直接插入排序
     * @return mixed
     */
    function shellInsertSort($arr, $dk) {
        $len = count($arr);
        for ($i = $dk; $i < $len; $i++) {
            if ($arr[$i] < $arr[$i - $dk]) {
                $j = $i - $dk;
                $temp = $arr[$i];
                $arr[$i] = $arr[$i - $dk];
                while ($temp < $arr[$j]) {
                    $arr[$j + $dk] = $arr[$j];
                    $j -= $dk;
                }
                $arr[$j + $dk] = $temp;
            }
            $this->printShell($arr, $i);
        }
        return $arr;
    }
}
$arr = [3, 1, 5, 7, 2, 4, 9, 6];
(new shell())->shellSort($arr);