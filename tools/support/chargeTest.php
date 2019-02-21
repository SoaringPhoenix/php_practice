<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/28
 * Time: 16:20
 */
Bd_Init::init('support');
$uid = 2000013103;
$coin = 1000;
$type = $argv[1];
$orderId = $argv[2];
switch ($type) {
        case 0:
                $ret = testRecharge($uid, $coin);
                break;
        case 1:
                $ret = testRechargeRefund($uid, $orderId);
                break;
}
var_dump($ret);
function testRecharge($uid, $coin) {
        $data = [
                'uid' => $uid,
                'coin' => $coin,
                ];
        $openssl = new Hk_Util_Openssl();
        $conf = array (
                        'publicKey' => '/app/support/library/support/pem/coin_invite_public_key.pem',
                        'bits' => '1024',
                      );
        $openssl->conf($conf);
        $_token = $openssl->publicEncrypt($data);
        return $_token;
}
function testRechargeRefund($uid, $orderId) {
        $data = [
                'uid' => $uid,
                'orderId' => $orderId,
                ];
        $openssl = new Hk_Util_Openssl();
        $conf = array (
                        'publicKey' => '/app/support/library/support/pem/coin_invite_public_key.pem',
                        'bits' => '1024',
                      );
        $openssl->conf($conf);
        $_token = $openssl->publicEncrypt($data);
        return $_token;
}

