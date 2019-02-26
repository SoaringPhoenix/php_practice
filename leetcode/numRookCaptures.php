<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/26
 * Time: 17:46
 */
class Solution {
    function numRookCaptures($board) {
        $rowNum = 0;
        $colNum = 0;
        $count = 0;
        $arr = [];
        foreach ($board as $index => $row) {
            if (in_array('R', $row)) {
                $rowNum = $index;
                $colNum = array_search('R', $board[$index]);
                for ($i = $colNum; $i >= 0; $i--) {
                    if ($board[$index][$i] == 'p') {
                        $count += 1;
                        break;
                    }
                    if ($board[$index][$i] == 'B') {
                        break;
                    }
                }
                for ($i = $colNum; $i <= 7; $i++) {
                    if ($board[$index][$i] == 'p') {
                        $count += 1;
                        break;
                    }
                    if ($board[$index][$i] == 'B') {
                        break;
                    }
                }
            }
        }
        foreach ($board as $index => $row) {

        }
        return $count;
    }
}
$board = [[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".","R",".",".",".","p"],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."]];
var_export((new Solution())->numRookCaptures($board));