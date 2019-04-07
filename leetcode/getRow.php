<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/6
 * Time: 10:35
 */
class Solution {
    function getRow($rowIndex) {
        list($ret, $index, $temp) = [[], 0, 1];
        if ($rowIndex == 0) return [1];
        for (; $index <= $rowIndex; $index++) {
            $ret[] = $temp;
            $temp = $temp * ($rowIndex - $index) / ($index + 1);
        }
        return $ret;
    }
}
var_export((new Solution())->getRow(4));