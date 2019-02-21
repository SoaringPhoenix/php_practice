<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/28
 * Time: 16:20
 */
Bd_Init::init('support');
$type = $argv[1];
$orderId = $argv[2];

class testRecharge
{
        const UID = 2269302388;
        const COIN = 10;
        private $openssl;
        private static $pem = [
                0 => array(
                                'publicKey' => '/app/support/library/support/pem/coin_invite_public_key.pem',
                                'bits' => '1024',
                          ),
                  1 => array(
                                  'publicKey' => '/app/support/library/support/pem/coin_test_public_key.pem',
                                  'bits' => '1024',
                            ),
                  2 => array(
                                  'publicKey' => '/app/support/library/support/pem/coin_deduct_public_key.pem',
                                  'bits' => '1024',
                            ),
                  ];

        public function __construct()
        {
                $this->openssl = new Hk_Util_Openssl();
        }

        public function execute($type, $orderId)
        {
                $ret = "";
                switch ($type) {
                        case 0:
                                $ret = $this->testRecharge(self::UID, self::COIN);
                                break;
                        case 1:
                                $ret = $this->testRechargeRefund(self::UID, $orderId);
                                break;
                        case 2:
                                $ret = $this->testDeduct(self::UID, self::COIN);
                                break;
                }
                var_dump($ret);
        }

        function testRecharge($uid, $coin)
        {
                $data = [
                        'uid' => $uid,
                        'coin' => $coin,
                        ];
                $conf = self::$pem[1];
                $this->openssl->conf($conf);
                $_token = $this->openssl->publicEncrypt($data);
                return $_token;
        }

        function testRechargeRefund($uid, $orderId)
        {
                $data = [
                        'uid' => $uid,
                        'orderId' => $orderId,
                        ];
                $conf = self::$pem[1];
                $this->openssl->conf($conf);
                $_token = $this->openssl->publicEncrypt($data);
                return $_token;
        }

        function testDeduct($uid, $coin)
        {
                $data = [
                        'uid' => $uid,
                        'coin' => $coin,
                        ];
                $conf = self::$pem[2];
                $this->openssl->conf($conf);
                $_token = $this->openssl->publicEncrypt($data);
                return $_token;
        }
}

$obj = new testRecharge();
$obj->execute($type, $orderId);
