<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/3
 * Time: 17:40
 */
class Solution {
    function getSum($a, $b) {
        while ($b != 0) {
            $carry = $a & $b;
            $a = $a ^ $b;
            $b = $carry << 1;
        }
        return $a;
    }
}