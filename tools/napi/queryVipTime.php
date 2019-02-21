<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/19
 * Time: 16:34
 */
Bd_Init::init('napi');
$uid = !isset($argv[1]) ? 2000017206 : $argv[1];
$_objDsEnergyUserPackage = new Pt_Ds_Energy_UserPackage();
$energyInfo = $_objDsEnergyUserPackage->getPackageInfo($uid);
$status = $energyInfo['status'];
switch ($status) {
    case 0:
        echo "未开通vip\n";
        break;
    case 1:
        $text = date('Y.m.d', $energyInfo['stopTime']) . " 到期\n";
        echo $text;
        break;
    case 2:
        $text = "vip已过期\n";
        echo $text;
        break;
}
