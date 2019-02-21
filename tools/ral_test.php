<?php
ral_set_logid(123456);
ral_set_pathinfo('./ral-test.php');
ral_set_querystring('usr=test');
$input = array('data' => 'test');
$ret = ral('ral-test', 'post', $input, rand());
if ($ret === false) {
    echo 'errno: '.ral_get_errno()."\n";
    echo 'err_msg'.ral_get_error()."\n";
    echo 'protocol_status: '.ral_get_protocol_code()."\n";
    }
else {
    echo $ret;
    }
