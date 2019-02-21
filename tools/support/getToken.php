<?php
Bd_Init::init('napi');
$source = 'zyb_plat';
$uid = 2000017206;
$token = Hk_Service_TokenCoin::getToken($source, $uid);
var_export($token);
