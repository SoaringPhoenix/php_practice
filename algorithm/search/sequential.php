<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/21
 * Time: 20:08
 */
class sequential{
    function search($arr, $target) {
        foreach ($arr as $index => $value) {
            if ($value == $target) {
                return $index;
            }
        }
        return -1;
    }
}
$arr = [3, 1, 5, 7, 2, 4, 9, 6];
var_export((new sequential())->search($arr, 2));