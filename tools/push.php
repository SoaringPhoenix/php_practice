<?php
Bd_Init::init('message');
$appId = 'homework';
$uType = Hk_Service_PushClient::UT_CUID;
$users = array(
    '646195F87587571AE31AB9B35A2E964A|430311330346868');
#$users = array(
#    '2000017206');
$mType = Hk_Service_PushClient::MT_URL;
$payload = array(
    'title' => 'zybang',
    'subtitle' => 'notice',
    'content' => 'push success',
    'url' => 'https://www.zybang.com',
    'badge' => 20,
    'ext' => array(
        'sound' => '',
        'category' => '',
        ),
     'extra' => array(
        'testkey' => 111111
        )
);
$client = new Hk_Service_PushClient();
$ret = $client::sendPush($appId, $uType, $users, $mType, $payload);
var_dump($ret);
if (!empty($ret)) {
    echo 'success'."\n";
    }
/*oppo A57设备cuid和uid绑定 redis语句
*hset 'push:homework:uid:2000013103' 646195F87587571AE31AB9B35A2E964A|430311330346868  1543305113
*/
?>
