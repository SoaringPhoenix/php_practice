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
        foreach ($board as $index => $row) {
            foreach ($board[$index] as $idx => $col) {
                if ($board[$index][$idx] == 'R') {
                    $rowNum = $index;
                    $colNum = $idx;
                }
            }
        }
        for ($i = $colNum; $i >= 0; $i--) {
            if ($board[$rowNum][$i] == 'p') {
                $count += 1;
                break;
            }
            if ($board[$rowNum][$i] == 'B') {
                break;
            }
        }
        for ($i = $colNum; $i <= 7; $i++) {
            if ($board[$rowNum][$i] == 'p') {
                $count += 1;
                break;
            }
            if ($board[$rowNum][$i] == 'B') {
                break;
            }
        }
        for ($j = $rowNum; $j >= 0; $j--) {
            if ($board[$j][$colNum] == 'p') {
                $count += 1;
                break;
            }
            if ($board[$j][$colNum] == 'B') {
                break;
            }
        }
        for ($j = $rowNum; $j <= 7; $j++) {
            if ($board[$j][$colNum] == 'p') {
                $count += 1;
                break;
            }
            if ($board[$j][$colNum] == 'B') {
                break;
            }
        }
        return $count;
    }
}
$board = [[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".","R",".",".",".","p"],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."]];
var_export((new Solution())->numRookCaptures($board));

/*
 * 3000个组合，
 */