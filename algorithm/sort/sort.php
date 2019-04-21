<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/20
 * Time: 15:34
 */
class sort {
    function printInsert($arr, $i) {
        if ($i == 0) {
            echo "初始：";
        }
        else {
            echo "<br>第{$i}次排序： ";
        }
        foreach ($arr as $index => $item) {
            echo "$item  ";
        }
    }

    function printShell($arr, $i, $dk = -1) {
        if ($dk != -1) {
            echo "<br>增量 = {$dk}<br>";
        }
        else {
            if ($i == 0) {
                echo "初始：";
            }
            else {
                echo "<br>arr[$i]待插入： ";
            }
            foreach ($arr as $index => $item) {
                echo "$item  ";
            }
        }
    }

    function printSelect($arr, $i = -1, $type = -1) {
        if ($i == -1) {
            echo "初始：";
        }
        elseif ($type == -1) {
            $j = $i + 1;
            echo "<br>第{$j}次排序： ";
        }
        else {
            echo "<br>第{$i}次排序： ";
        }
        foreach ($arr as $index => $item) {
            echo "$item  ";
        }
    }
}