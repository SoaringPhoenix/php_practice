<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/3/10
 * Time: 18:22
 */
class Solution {
    function maxIncreaseKeepingSkyline($grid) {
        $hor = [];
        $ver = [];
        $count = 0;
        foreach ($grid as $key => $row) {
            $hor[] = max($row);
        }
        foreach ($grid[0] as $key => $col) {
            $ver[] = max(array_column($grid, $key));
        }
        foreach ($grid as $index => $row) {
            foreach ($grid[$index] as $idx => $col) {
                $max = min($hor[$index], $ver[$idx]);
                $max > $col && $count += $max - $col;
            }
        }
        return $count;
    }
}
$grid = [[3,0,8,4],[2,4,5,7],[9,2,6,3],[0,3,1,0]];
var_export((new Solution())->maxIncreaseKeepingSkyline($grid));