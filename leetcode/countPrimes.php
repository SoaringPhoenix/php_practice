<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/28
 * Time: 11:11
 */
class Solution {
    function countPrimes($n) {
        $isPrime = [];
        for ($i = 2; $i < $n; $i++) {
            $isPrime[$i] = 1;
        }
        for ($i = 2; $i * $i < $n; $i++) {
            if (!$isPrime[$i]) {
                continue;
            }
            for ($j = $i; $i * $j < $n; $j++) {
                $isPrime[$i * $j] = 0;
            }
        }
        return array_sum($isPrime);
    }
}
$n = 5;
var_export((new Solution())->countPrimes($n));