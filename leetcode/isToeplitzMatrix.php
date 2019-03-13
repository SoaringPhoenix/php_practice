<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/12
 * Time: 20:38
 */
class Solution {
    function isToeplitzMatrix($matrix) {
        foreach ($matrix as $index => $row) {
            foreach ($row as $idx => $col) {
                if ($index < count($matrix) - 1 && $idx < count($row) - 1) {
                    if ($col != $matrix[$index + 1][$idx + 1]) {
                        return false;
                    }
                }
            }
        }
        return true;
    }
}
$matrix =  [
    [1,2],
    [2,2]
];
var_export((new Solution())->isToeplitzMatrix($matrix));