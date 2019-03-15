<?php

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/24
 * Time: 10:52
 */
class Solution {
    function sumEvenAfterQueries($A, $queries) {
        $odd = [];
        $origin = $A;
        foreach ($A as $elem) {
            if ($elem & 1) {
                array_push($odd, $elem);
                $A = array_diff($A, [$elem]);
            }
        }
        foreach ($queries as $index => $query) {
            if ($query[0] & 1) {
                if ($origin[$query[1]] & 1) {
                    $queries[$index] = array_sum($A) + $query[0] + $origin[$query[1]];
                    array_push($A, $query[0] + $origin[$query[1]]);
                } else {
                    $queries[$index] = array_sum($A) - $origin[$query[1]];
                    $A[$index] = $A[$index] + $query[0];
                    $A = array_diff($A, [$A[$index]]);
                }
            } else {
                if (count($A) == 0) {$queries = [0];continue;}
                if (!($origin[$query[1]] & 1)) {
                    $A[$query[1]] += $query[0];
                }
                else {
                    $origin[$query[1]] += $query[0];
                }
                $queries[$index] = array_sum($A);
            }
        }
        return $queries;
    }
}

$A = [1, 2, 3, 4];
//$A = [3, 2];
$queries = [[1, 0], [-3, 1], [-4, 0], [2, 3]];
//$queries = [[4, 0], [3, 0]];
var_export((new Solution())->sumEvenAfterQueries($A, $queries));