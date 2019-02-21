<?php
#Bd_Init::init('napi');
Bd_Init::init('support');
$openssl      = new Hk_Util_Openssl();
$payChannel = 'invite';
$conf = Bd_Conf::getAppConf('gettupiandaoliupostionprize/pem');
$ret = $openssl->conf($conf['coin'][strtolower($payChannel)]);
$conf = Bd_Conf::getAppConf('rsa/pem');
$ret = $conf['coin'][strtolower($payChannel)];
#$ret =         $openssl->conf($conf['drawBook']);
var_export($ret);
#var_export($conf['drawBook']);
