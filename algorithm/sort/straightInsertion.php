<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/20
 * Time: 15:19
 */
include "sort.php";
class straightInsertion extends sort {
    function sort($arr) {
        $len = count($arr);
        $this->printInsert($arr, 0);
        for ($i = 1; $i < $len; $i++) {
            if ($arr[$i] < $arr[$i - 1]) {  //更大的元素不处理
                $j = $i - 1;
                $temp = $arr[$i];   //复制为哨兵，存储待排序元素
                $arr[$i] = $arr[$i - 1];    //后移一位
                while ($temp < $arr[$j]) {  //查找插入位置
                    $arr[$j + 1] = $arr[$j];
                    $j--;
                }
                $arr[$j + 1] = $temp;   //插入
            }
            $this->printInsert($arr, $i);
        }
        return $arr;
    }
}
$arr = [3, 1, 5, 7, 2, 4, 9, 6];
(new straightInsertion())->sort($arr);

