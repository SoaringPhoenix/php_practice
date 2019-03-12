<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/12
 * Time: 16:27
 */
class Solution {
    function countBattleships($board) {
        $count = 0;
        foreach ($board as $index => $row) {
            foreach ($row as $idx => $col) {
                if ($col == 'X' && ($index == 0 || $board[$index - 1][$idx] != 'X') && ($idx == 0 ||
                    $board[$index][$idx - 1] != 'X')) {
                    $count += 1;
                }
            }
        }
        return $count;
    }
}
$board = [["X",".",".","X"],[".",".",".","X"],[".",".",".","X"]];
var_export((new Solution())->countBattleships($board));