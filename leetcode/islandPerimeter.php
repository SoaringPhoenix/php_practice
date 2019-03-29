<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 15:10
 */
class Solution {
    function islandPerimeter($grid) {
        $perimeter = 0;
        foreach ($grid as $index => $row) {
            foreach ($row as $idx => $cell) {
                if ($cell == 1) {
                    $perimeter += !($grid[$index][$idx + 1]) + !($grid[$index][$idx - 1]) + !($grid[$index - 1][$idx])
                        + !($grid[$index + 1][$idx]);
                }
            }
        }
        return $perimeter;
    }
}
$grid = [
    [0, 1, 0, 0],
    [1, 1, 1, 0],
    [0, 1, 0, 0],
    [1, 1, 0, 0]
];
//$grid = [[1,1,0,1],[1,1,1,1],[1,1,1,1]];
var_export((new Solution())->islandPerimeter($grid));
