<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/7
 * Time: 21:36
 */
class Solution {
    function lemonadeChange($bills) {
        list($five, $ten) = [0, 0];
        foreach ($bills as $index => $bill) {
            switch ($bill) {
                case 5:
                    $five += 1;
                    break;
                case 10:
                    $ten += 1;
                    $five -= 1;
                    break;
                case 20:
                    if ($ten > 0) {
                        $ten -= 1;
                        $five -= 1;
                    }
                    else {
                        $five -= 3;
                    }
                    break;
            }
            if ($ten < 0 || $five < 0) {
                return false;
            }
        }
        return true;
    }
}
$bills = [5,5,5,5,20,20,5,5,5,5];
var_export((new Solution())->lemonadeChange($bills));