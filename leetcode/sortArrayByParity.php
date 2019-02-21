<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/2/21
 * Time: 22:41
 */
class Solution
{
    function sortArrayByParity($A)
    {
        foreach ($A as $idx => $num) {
            if ($num % 2 != 0) {
                unset($A[$idx]);
                array_push($A, $num);
            }
        }
        return $A;
    }
}
$A = [3,1,2,4];
var_export((new Solution())->sortArrayByParity($A));