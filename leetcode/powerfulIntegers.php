<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/1
 * Time: 13:23
 */
class Solution {
    function powerfulIntegers($x, $y, $bound) {
        list($small, $big, $ret) = [0, 0, []];
        if ($x <= $y) {$small = $x; $big = $y;}
        if ($x > $y) {$small = $y; $big = $x;}
        $boundX = (($small == 1) ? 0 : log($bound, $small));
        $boundY = (($big == 1) ? 0 : log($bound, $big));
        for ($i = 0; $i <= $boundX; $i++) {
            $num = 0;
            for ($j = 0; $j <= $boundY; $j++) {
                $num = pow($small, $i) + pow($big, $j);
                if ($num > $bound || in_array($num, $ret)) {
                    continue;
                }
                $ret[] = $num;
            }
            if ($num > $bound) {
                continue;
            }
        }
        return $ret;
    }
}
$x = 2;
$y = 1;
$bound = 10;
var_export((new Solution())->powerfulIntegers($x, $y, $bound));