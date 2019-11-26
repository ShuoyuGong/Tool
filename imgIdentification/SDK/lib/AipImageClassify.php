<?php
require_once '../AipImageClassify.php';

// 你的 APPID AK SK
const APP_ID = '17858255';
const API_KEY = 'wUytyVcjZ5fzNfPRixweyZES';
const SECRET_KEY = 'PG58iINATuB7WEGORKLkNXobEUu2h1WF';

$client = new AipImageClassify(APP_ID, API_KEY, SECRET_KEY);


// 接收文件名
$imgName = $_POST["imgName"];
// 接收识别方式
$wayToIdentify = $_POST["wayToIdentify"];

// 判断识别方式，做出不同识别操作
if($wayToIdentify == "通用物体识别"){
    print_r(json_encode($client->advancedGeneral(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "LOGO商标识别"){
    print_r (json_encode($client->logoSearch(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "动物识别"){
    print_r (json_encode($client->animalDetect(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "植物识别"){
    print_r (json_encode($client->plantDetect(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "菜品识别"){
    print_r (json_encode($client->dishDetect(file_get_contents('../../demo/userImg/'.$imgName))));
}elseif($wayToIdentify == "车型识别"){
    print_r (json_encode($client->carDetect(file_get_contents('../../demo/userImg/'.$imgName))));
}
// echo $wayToIdentify;