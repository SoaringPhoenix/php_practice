<?php
echo 1;
Bd_Init::init("message");

$appId = "homework";
//cuid push
/*
$uType = Hk_Service_PushClient::UT_CUID; 
$users= array(
  */      
   // '414BE392EF355D89D8E9542192DC8E88|996759530827168',  //a53      
   /* '3BE77CC90F939F6DF5629FBB5F647E6A|937592830464768',       //r11s 
    '97FA6524E5C3F241D6655DC906E16836|617852450835953', //10三星
    'd41d8cd98f00b204e9800998ecf8427eda8fcd67', //iphone6p
    '57DCA6FDC9F232DDB4F123A6738A1892|529774330473168',//红米note
    '196A278176C094773538EA12DFF680E7|0',//华为honor
    '40B7A3C74E9E49C7A074891C6D44DD70|959957120189768',//google
    '773F71F52A6164857223A86D7AE7BEEB|937933830153268',//vivo
    '9AE5511671E45861A78BE1EEF1B14D3D|681284230822468',//金立
    '874E43687805065842E3124948E8099D|368378530437868',//honor AL00
    
    'd88f8a2fd57f5fe17d562db285e5e6ece74026c7',//iphone 5
    'd41d8cd98f00b204e9800998ecf8427ec154f2b0',//iphone 6pw
  
    'd41d8cd98f00b204e9800998ecf8427eda8fcd67',//iphone 6p 越狱
    'd88f8a2fd57f5fe17d562db285e5e6ece74026c7',    
*/    //'196A278176C094773538EA12DFF680E7|0',
//    );


//uid push

#$uType = Hk_Service_PushClient::UT_UID;
$uType = Hk_Service_PushClient::UT_CUID;
#$users = array(
        2000013103        );
$users = array('646195F87587571AE31AB9B35A2E964A|430311330346868');
$mtType = Hk_Service_PushClient::MT_URL;
#$mtType = Hk_Service_PushClient::MT_NATIVE;
$payload = array(
    "title"    => "作业帮",
    "subtitle" => "提醒",
    "content"  => "暑假来作业帮看看 >>",
    //"content" => "https://www.zybang.com  >>",
//    "url"      => "https://www.zybang.com/apollo/activity/finalcoursedoubleList",
    //"url" => "homework://live/live/knowledgehome",
    //"url" => "app://homework/skin/list",
   # "url" => "app://homework/push/link?to=sync_practice",
   "url" => "https://www.zybang.com",
    "badge"    => 20,
    "ext"      => array(
        "sound"    => "",
        "category" => "",
    ),
    "extra"    => array(
        "testkey" => 111111,
    ),
);
$ret = Hk_Service_PushClient::sendPush($appId, $uType, $users, $mtType, $payload);
Bd_Log::warning("**********************luoting******pushret****************".var_export($ret, true));
var_dump($ret);
