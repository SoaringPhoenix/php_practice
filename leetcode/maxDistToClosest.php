<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2019/4/6
 * Time: 13:31
 */
class Solution {
    function maxDistToClosest($seats) {
//        list($one, $idx, $start, $len) = [[], 0, 0, []];
//        foreach ($seats as $index => $seat) {
//            if ($seat == 1) {
//                $one[$idx] = $index;
//                $len[] = ($index - $one[$idx - 1]) / 2;
//                $start = $index;
//                $idx++;
//            }
//        }
//        return $start;
//        if (($seats[0] ^ $seats[count($seats) - 1] == 1) && (max($len) == $len[0]
//                || max($len) == $len[count($len) - 1])) {
//            return max(count($seats) - $start - 1, $start);
//        }
//        return floor(max($len));
    }
}
var_export((new Solution())->maxDistToClosest([0,0,1,0,1,1]));