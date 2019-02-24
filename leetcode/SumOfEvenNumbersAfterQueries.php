<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/24
 * Time: 10:52
 */
class Solution {
    function sumEvenAfterQueries($A, $queries) {
        foreach ($queries as $index => $query) {
            $A[$queries[$index][1]] += $query[0];
            $queries[$index] = 0;
            foreach ($A as $idx => $elem) {
                $elem % 2 == 0 && $queries[$index] += $elem;
            }
        }
        return $queries;
    }
}
$A = [1, 2, 3, 4];
$queries = [[1, 0], [-3, 1], [-4, 0], [2, 3]];
var_export((new Solution())->sumEvenAfterQueries($A, $queries));