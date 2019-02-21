<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/21
 * Time: 13:06
 */
class Solution {
    function numUniqueEmails($emails) {
        $ret = [];
        foreach ($emails as $idx => $email) {
            $arr = explode('@', $email);
            strpos($arr[0], '+') !== false && $arr[0] = substr($arr[0], 0, strpos($arr[0], '+'));
            $arr[0] = str_replace('.', '', $arr[0]);
            $ret[$idx] = $arr[0]."@".$arr[1];
        }
        return count(array_unique($ret));
    }
}
$emails = ["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"];
var_export((new Solution())->numUniqueEmails($emails));