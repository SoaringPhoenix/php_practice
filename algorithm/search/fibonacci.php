<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/21
 * Time: 23:01
 */
class fibonacci {
    const LENGTH = 20;
    function search($arr, $target) {
        list($high, $low, $key, $fib, $temp) = [count($arr) - 1, 0, 0, [], []];
        $this->fib($fib);
        while ($target > $fib[$key] - 1) {
            $key++;
        }
        for ($i = $target; $i < $fib[$key] - 1; $i++) {
            $temp[$i] = $arr[$target - 1];
        }
        while ($low <= $high) {
            $mid = $low + $fib[$key - 1] - 1;
            if ($key < $temp[$mid]) {
                $high = $mid - 1;
                $key -= 1;
            }
            elseif ($key > $temp[$mid]) {
                $low = $mid + 1;
                $key -= 2;
            }
            else {
                if ($mid < $target) {
                    return $mid;
                }
                else {
                    return $target - 1;
                }
            }
        }
        return -1;
    }

    function fib($fib) {
        list($fib[0], $fib[1]) = [0, 1];
        for ($i = 2; $i < self::LENGTH; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
    }
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
var_export((new fibonacci())->search($arr, 8));