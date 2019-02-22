<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/22
 * Time: 17:02
 */
class Solution {
    function judgeCircle($moves) {
        return (substr_count($moves, 'D') == substr_count($moves, 'U') && substr_count($moves, 'L')
        == substr_count($moves, 'R'));
    }
}
$moves = "UDLR";
var_export((new Solution())->judgeCircle($moves));