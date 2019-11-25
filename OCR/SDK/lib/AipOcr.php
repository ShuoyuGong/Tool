<?php
// 引入文字识别OCR SDK
require_once '../AipOcr.php';

// 你的 APPID AK SK
const APP_ID = '17794008';
const API_KEY = '4gR14dPK3FAkpSuhPUhaGsaF';
const SECRET_KEY = 'OV7RfEVGS70NsRTvCOlSMvN1kOApZPQ8';

$client = new AipOcr(APP_ID, API_KEY, SECRET_KEY);

// 接收文件名
$imgName = $_POST["imgName"];
// 接收识别方式
$wayToIdentify = $_POST["wayToIdentify"];

// 判断识别方式，做出不同识别操作
if($wayToIdentify == "通用文字识别"){
    print_r(json_encode($client->basicGeneral(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "身份证识别"){
    print_r (json_encode($client->idcard(file_get_contents('../../demo/userImg/'.$imgName),"front")));
}elseif($wayToIdentify == "银行卡识别"){
    print_r (json_encode($client->bankcard(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "名片识别"){
    print_r (json_encode($client->businessCard(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "车牌识别"){
    print_r (json_encode($client->licensePlate(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "营业执照识别"){
    print_r (json_encode($client->businessLicense(file_get_contents('../../demo/userImg/'.$imgName))));
}


