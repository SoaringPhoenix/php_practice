<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/4/3
 * Time: 16:35
 */
class Solution {
    function letterCasePermutation($S) {
        $ret = [];
        $arr = str_split($S);
        $this->track($ret, 0, $arr);
        return $ret;
    }
    function track($ret, $i, $arr) {
        if ($i == count($arr)) {
            $ret[] = $arr[$i - 1];
            var_export($ret);echo "1<br>";
            var_export($i);echo "<br>";
        }
        else {
            if (is_numeric($arr[$i])) {
                $this->track($ret, $i + 1, $arr);
                var_export($ret);echo "2<br>";
                var_export($i);echo "<br>";
            }
            else {
                $arr[$i] = strtoupper($arr[$i]);
                $this->track($ret, $i + 1, $arr);
                $arr[$i] = strtolower($arr[$i]);
                $this->track($ret, $i + 1, $arr);
                var_export($ret);echo "3<br>";
                var_export($i);echo "<br>";
            }
        }

    }
}
$S = 'a1b2';
var_export((new Solution())->letterCasePermutation($S));