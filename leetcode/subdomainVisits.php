<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/28
 * Time: 13:44
 */
class Solution {
    function subdomainVisits($cpdomains) {
        $ret = [];
        foreach ($cpdomains as $index => $cpdomain) {
            $count = explode(' ', $cpdomain)[0];
            $str = explode(' ', $cpdomain)[1];
            $num = count(array_keys(str_split($str), '.'));
            if ($num == 1) {
                $main = explode('.', $str)[0];
                $domain = explode('.', $str)[1];
                $ret["$main.$domain"] += $count;
                $ret["$domain"] += $count;
                if (is_int($ret["$main.$domain"])) {
                    $ret["$main.$domain"] .= " $main.$domain";
                }
                if (is_int($ret["$domain"])) {
                    $ret["$domain"] .= " $domain";
                }
            }
            else {
                $main = explode('.', $str)[0];
                $sub = explode('.', $str)[1];
                $domain = explode('.', $str)[2];
                $ret["$main.$sub.$domain"] += $count;
                $ret["$sub.$domain"] += $count;
                $ret["$domain"] += $count;
                if (is_int($ret["$main.$sub.$domain"])) {
                    $ret["$main.$sub.$domain"] .= " $main.$sub.$domain";
                }
                if (is_int($ret["$sub.$domain"])) {
                    $ret["$sub.$domain"] .= " $sub.$domain";
                }
                if (is_int($ret["$domain"])) {
                    $ret["$domain"] .= " $domain";
                }
            }
        }
        return $ret;
    }
}
$cpdomains = ["900 google.mail.com", "50 yahoo.com", "1 intel.mail.com", "5 wiki.org"];
var_export((new Solution())->subdomainVisits($cpdomains));