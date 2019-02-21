<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/28
 * Time: 10:42
 */
Bd_Init::init('');
$uid = $argv[1];
$coin = Hk_Service_TokenCoin::getUserTokenCoin($uid);
var_dump($coin);
