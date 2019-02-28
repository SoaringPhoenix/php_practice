<?php
Bd_Init::init('napi');
$uids = array(
2000017206);
$tplId = 6;
$msg = new Hk_Service_MsgClient('homework');
$ret = $msg->sendNotice($tplId, $uids, [], []);
var_dump($ret);

?>


