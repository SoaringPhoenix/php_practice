<?php
Bd_Init::init('message');
$suid = 2000017206;
$uids = array(
2000017206);
$isPush = true;
$mType = Hk_Service_MsgClient::MTYPE_COMMENT;
$payload = array(
'url' => 'http://www.zybang.com',
'reply' => 'success',
'refer' => array(
'image' => 'zyb_5b03dbd3c60825e7d657dfed34c787f6.png',
'content' => '测试Message是否通畅'
),
);
$msgClient = new Hk_Service_MsgClient('homework');
$ret = $msgClient->sendMsg($suid, $uids, $mType, $payload, $isPush);
Bd_Log::addNotice('call success');
var_dump($ret);

?>
