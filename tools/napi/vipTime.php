<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/10
 * Time: 21:03
 */
Bd_Init::init('napi');
class vipTime{
        private $objNmq;
        public function __construct() {
                $this->objNmq      = new Hk_Service_Nmq();
        }
        public function execute($uid, $days)
        {
                $arrCommand = array(
                                'command_no'  => Hk_Const_Command::CMD_PAY_PACKAGE_SUCCESS,
                                'uid'         => $uid,
                                'packageType' => Pt_Ds_Vip_UserPackage::PLAT_PACKAGE_STUDY_ENERGY,
                                'serviceId'   => Pt_Service_PlatPay::PLAT_SERVICE_STUDY_ENERGY,
                                'itemId'      => 1001, //1天
                                'orderId'     => 0,//免费赠送的。
                                'startTime'   => time(),
                                'duration'    => 86400 * $days,//日卡
                                );
                $res = $this->objNmq->talkToQcm(Hk_Const_Command::CMD_PAY_PACKAGE_SUCCESS, $arrCommand);
                if($res === false){
                        Bd_Log::warning("send to qcm faild uid[".$uid."], command[".json_encode($arrCommand)."]");
                }
                var_dump($res);
                return $res;
        }
}
$uid = $argv[1];
$days = !empty($argv[2]) ? $argv[2] : 30;
$vipTime = new vipTime();
$vipTime->execute($uid, $days);
